<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    const SEX_UN    = 2; //未知
    const SEX_BOY   = 1; //男
    const SEX_GIRL  = 0; //女
    protected $table = 'employees';
    protected $fillable = [
        'name','sex','nation','identity','address','phone','birth_date'
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
    public function age(){
        // 当前日期
        $currentDate = strtotime(now());
        $currentYear = date('Y',$currentDate);
        $currentMonth = date('m',$currentDate);
        $currentDay =date('d',$currentDate);
        // 出生日期
        $birthDate = strtotime($this->birth_date);
        $birthYear = date('Y',$birthDate);
        $birthMonth = date('m',$birthDate);
        $birthDay = date('d',$birthDate);
        // 计算年龄
        $age = $currentYear - $birthYear;
        if(($birthMonth>$currentMonth)||($birthMonth==$currentMonth&&$birthDay>$currentDay))$age--;
        return $age;
    }
}
