<?php
namespace Easy\Session;
class Session
{
	public function set($key, $value, $typ="Session")
	{
		switch($typ)
		{
			case "Session": $_SESSION[$key] = $value; break;
			case "Cookie": setcookie($key, $value); break;
		}
	}
	public function get($key, $typ="Session")
	{
		switch($typ)
		{
			case "Session": return $_SESSION[$key]; break;
			case "Cookie": return  $_COOKIE[$key]; break;
		}
	}
}