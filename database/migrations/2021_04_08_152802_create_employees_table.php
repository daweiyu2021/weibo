<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->tinyIntege('sex');
            $table->string('nation',12);
            $table->string('identity',18)->unique();
            $table->string('address',100);
            //如果为空，表示以身份证日期为准
            //曾经在某个年代时段，登记生日时以农历日期为准，身份证上的出生年月日和实际出生年月日并不符合
            $table->date('birth_date')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
