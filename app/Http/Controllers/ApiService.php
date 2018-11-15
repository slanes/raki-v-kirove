<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class ApiService extends Controller
{
    public function createOrder(Request $request){
    	$result = [
    		'response' => "Ваша заявка не принята. Просьба позвонить по телефону ' . config('informantion.formatedPhone') . '<br>Просим прощения за предоставленные неудобства!"
    	];
    	if ($request->has(['name', 'phone'])) {
    		$order = new Order;
	        $order->name = $request->name;
	        $order->phone = $request->phone;
	        $order->status = 'Новый';
	        $order->place_of_order_comment = '';
	        $order->comment = '';
	        $order->amount = 0.0;
	        $order->place_of_order = 'Сайт';
	        $order->profit = $order->amount * intVal(config('information.percent_profit'));
	        $order->save();
	        if($order->id){
        		$result['response'] = 'Ваша заявка принята.<br/>В ближайшее время с Вами свяжется наш менеджер.';
	        }
		}

		return $result;
    }
}
