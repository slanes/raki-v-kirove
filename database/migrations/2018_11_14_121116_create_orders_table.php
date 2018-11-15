<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->enum('status', ['Новый', 'Выполнен', 'Отмененный', 'Ожидает оплаты']);
            $table->float('amount', 8, 2);
            $table->float('profit', 8, 2);
            $table->enum('place_of_order', ['Сайт', 'Инстаграмм', 'Юля', 'Авито']);
            $table->string('place_of_order_comment', '');
            $table->string('comment', '');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
