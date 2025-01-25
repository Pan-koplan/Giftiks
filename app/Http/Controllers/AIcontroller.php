<?php

namespace App\Http\Controllers;

use App\Models\gifts;
use App\Models\tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AIcontroller extends Controller
{
    public function TagGen(Request $descript_prompt){
        




        $valid = $descript_prompt->validate([
            'descript_prompt' => 'required|min:50'
        ]);
        //dd("gpt://" . env('FOLDERID') . "/yandexgpt-lite");
        // Данные запроса
        $prompt = [
            "modelUri" => "gpt://". env("FOLDERID")."/yandexgpt-lite",
            "completionOptions" => [
                "stream" => false,
                "temperature" => 0.6,
                "maxTokens" => "2000"
            ],
            "messages" => [
                [
                    "role" => "system",
                    "text" => "К описанию человека нужно подобрать теги из списка ниже, эти теги описывают свойства подарка, который наилучшим образом подойдет этому человеку. подбери как можно больше тегов, сохраняя адекватность и не придумывая новых, пример вывода:Дом и быт#Красота и уход#Электроника#Развлечения. Далее описан список тегов, выбирай только из них: Дом и быт Красота и уход Электроника Развлечения Спорт и активный отдых Еда и напитки Мода и стиль Книги Здоровье Декор и интерьер Аксессуары Подарки для мужчин Подарки для женщин Подарки для детей Профессиональные подарки Техника и инструменты Парфюмерия Аксессуары для дома Спорттовары Игры и хобби Товары для животных Товары для офиса Милое Деловой стиль Практичный Смешное Релаксация Оздоровление Инновационное Функциональное Красивое Полезное Саморазвитие Технологичное Эстетичное Гурманский Удобное Комфортное Незабываемое Памятное Вдохновляющее Развлекательное Обучающее Для пожилых Для коллег Для друзей Для партнеров Релаксация Красота Здоровье Удобство Комфорт Вдохновение Развлечения Обучение Уход Забота Практичность Стиль Экологичность Безопасность Качество Долговечность Прочность Уникальность Памятность Уборка Уход за волосами Наборы DIY Гадание Баня Соленое Кухня Косметика Строительный инструмент Timekiller Рыбалка Сладкое Уход за кожей Защитные чехлы Программист Походы Полезная еда Туризм Водитель Вышивание Дизайнер Рисование Фотография Коллекционирование Ролевые игры Аксессуары для компьютера Строитель Украшения Мебель Фитнес"
                ],
                [
                    "role" => "user",
                    "text" =>  $valid['descript_prompt']
                ]
            ]
        ];

        // URL для запроса
        $url = "https://llm.api.cloud.yandex.net/foundationModels/v1/completion";

        // Заголовки
        $headers = [
            "Content-Type: application/json",
            "Authorization: Api-Key ". env('OAUTHTOKEN')
        ];

        // Инициализация cURL
        $ch = curl_init($url);

        // Установка параметров cURL
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($prompt));

        // Выполнение запроса
        $response = curl_exec($ch);

        // Обработка ошибок
        if (curl_errno($ch)) {
            dd(curl_error($ch));
        }
        if ($response === FALSE) {
            die('Ошибка при выполнении запроса');
        }
        // Закрытие cURL
        curl_close($ch);

        $responseData = json_decode($response, true);
        //dd($responseData['result']['alternatives'][0]['message']['text']);
        $responseData = explode('#', $responseData['result']['alternatives'][0]['message']['text']);
        //dd(explode('#', $responseData)[0]);
        
        foreach($responseData as $data){
            $tags[] = tags::where('name', $data)->first();
        }
        $gifts = [
            '0' => '0'
        ];
        foreach($tags as $tag){ 
            //dump($tag);   
            $gift_db = $tag->gifts ?? [];
            foreach($gift_db as $gift){
                if (Array_key_exists($gift->id, $gifts) == false){$gifts[$gift->id] = 1;}
                else{$gifts[$gift->id] += 1;}
            }
            
        }
        arsort($gifts);//сортируем по рейтингу

        $ids = array_keys($gifts);//выделяем ключи из словаря
        $gifts = gifts::whereIn('id', $ids)    
            ->orderByRaw("FIELD(id, " . implode(',', $ids) . ")")
            ->get();//создаем список подарков-объектов по этим ключам
        //dump($gifts);
        return view('Results', ['gifts' => $gifts]);
    }
}
?>