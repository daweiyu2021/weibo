<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    const SEX_UN    = 0; //未知
    const SEX_BOY   = 1; //男
    const SEX_GIRL  = 2; //女
    protected $table = 'employees';
    protected $fillable = [
        'name','sex','nation','identity','address'
    ];
    public function sex($ind = null){
        $arr = [
            self::SEX_UN=>'未知',
            self::SEX_BOY=>"男",
            self::SEX_GIRL=>'女',
        ];
        if($ind!==null){
            return array_key_exists($ind, $arr)?$arr[$ind]:$arr[self::SEX_UN];
        }
    }
}
