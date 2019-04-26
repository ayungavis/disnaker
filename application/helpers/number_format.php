<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('nominal')) {
	function nominal($number)
	{
		return number_format($number, 0, ',', '.');
	}
}
