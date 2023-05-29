<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home() 
    {
        $items = [
            [
                'svg' => 'svg__item__1',
                'title' => 'Гарантія',
                'text' => 'На всю продукцію діє гарантія відповідно до законодавства України.'
            ],
            [
                'svg' => 'svg__item__2',
                'title' => 'Нам довіряють',
                'text' => '20 років на ринку. Задоволені покупці та партнери, тисячі рекомендацій.'
            ],
            [
                'svg' => 'svg__item__3',
                'title' => 'Все для Вас',
                'text' => 'Зробимо меблі на замовлення, які підходять саме Вам.'
            ]
        ];

        return view('index', ['items' => $items]);
    }


    public function categories()
    {
        $categories = [
            [
                'title' => 'Крісла',
                'svg' => 'svg__category_1',
                'url' => '/chairs'
            ],
            [
                'title' => 'Стільці',
                'svg' => 'svg__category_2',
                'url' => '/chairs'
            ],
            [
                'title' => 'Шафи',
                'svg' => 'svg__category_3',
                'url' => '/chairs'
            ],
            [
                'title' => 'Дивани',
                'svg' => 'svg__category_4',
                'url' => '/chairs'
            ],
            [
                'title' => 'Столи',
                'svg' => 'svg__category_5',
                'url' => '/chairs'
            ],
            [
                'title' => 'Ліжка',
                'svg' => 'svg__category_6',
                'url' => '/chairs'
            ],
        ];

        return view('categories', ['categories' => $categories]);
    }

    public function chairs()
    {
        $chairs = [
            [
                'image' => 'chair__image__1',
                'title' => 'Стілець Білий',
                'price' => '1488₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ],
            [
                'image' => 'chair__image__2',
                'title' => 'Стілець Сірий',
                'price' => '2023₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ],
            [
                'image' => 'chair__image__3',
                'title' => 'Стілець Чорний',
                'price' => '4444₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ]
        ];

        return view('chairs', ['chairs' => $chairs]);
    }

    public function chair__white()
    {
        $chairImages = ['chair__white__image__1', 'chair__white__image__2', 'chair__white__image__3'];
        
        $characteristics = [
            'Матеріал' => 'Пластик, дерево, метал',
            'Колір' => 'Білий',
            'Ширина' => '46 см',
            'Висота' => '82 см',
            'Призначення' => 'Для кухні, для вітальні'
        ];

        return view('chair__white', ['chairImages' => $chairImages], ['characteristics' => $characteristics]);
    }


    
}
