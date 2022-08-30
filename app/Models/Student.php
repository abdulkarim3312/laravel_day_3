<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'    => 1,
                'name'  =>'Karim',
                'email' =>'karim@gmail.com',
                'mobile'=>'0125478856'
            ],
            1 => [
                'id'    => 2,
                'name'  =>'Ilham',
                'email' =>'ilham@gmail.com',
                'mobile'=>'254789652'
            ],
            2 => [
                'id'    => 3,
                'name'  =>'Mehmet',
                'email' =>'mehmet@gmail.com',
                'mobile'=>'784525555'
            ],
        ];
    }
}
