<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laraveldaily\Timezones\TimezonesServiceProvider;

class HomeController extends Controller
{
	public function welcome(){
		// $time = TimezonesServiceProvider::boot();
		// dd($time);
		// die('ok');
		return view('welcome', compact('time'));
	}
}