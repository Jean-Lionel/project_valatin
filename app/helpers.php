<?php


if(! function_exists('add_active')){

	function add_active($router){
		return Route::is($router) ? 'is_active' : '';
	}
}