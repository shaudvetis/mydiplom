<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controllers
{
	public function  __construct() 
		{
		$user = Auth::user();
		if (!$user) {
            return  redirect()-> route('login');
	}
	if (!$user->isAdmin()) {

	 return  redirect()-> route('userpage');
}
}
public function indexAction ()
{
	echo "Dashboard";
}