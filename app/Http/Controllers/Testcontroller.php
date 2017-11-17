<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Testcontroller extends Controller
{
	public function Image()
	{
		return view ("image", ['varijabla'=> 'vrijednost ove varijable']);
	}
}
?>








