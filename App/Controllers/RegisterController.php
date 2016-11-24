<?php
namespace App\Controllers;

use App\Views\RegisterView;

Class RegisterController
{
	public function show(){
		$view = new RegisterView();
     	$view->render();
	}
}
