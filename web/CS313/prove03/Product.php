<?php

class Product
{

    public $productArray = array(
        "CN001" => array(
            'id' => '1',
            'name' => 'Chinese Ramen',
            'code' => 'CN001',
            'image' => '../../images/1.jpg',
            'price' => '5.00'
        ),
        "JP002" => array(
            'id' => '2',
            'name' => 'Japanese Soba',
            'code' => 'JP002',
            'image' => '../../images/2.jpg',
            'price' => '10.00'
        ),
        "ITA003" => array(
            'id' => '3',
            'name' => 'Italia Pasta',
            'code' => 'ITA003',
            'image' => '../../images/3.jpg',
            'price' => '8.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}