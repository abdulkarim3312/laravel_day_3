<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $products;
    public static function getAllProduct()
    {
        return [
            0 => [
                'id'=>1,
                'name'=>'polo shirt',
                'price'=>'520',
                'image'=>'se2.png'
            ],
            1 => [
                'id'=>2,
                'name'=>'polo shirt',
                'price'=>'840',
                'image'=>'se3.png'
            ],
            2 => [
                'id'=>3,
                'name'=>'polo shirt',
                'price'=>'650',
                'image'=>'c1.png'
            ],
            3 => [
                'id'=>4,
                'name'=>'polo shirt',
                'price'=>'650',
                'image'=>'c2.png'
            ],
        ];
    }

    public static function getProductById($id)
    {
        self::$products = self::getAllProduct();
        foreach (self::$products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}
