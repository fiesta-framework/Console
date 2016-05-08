<?php 

namespace Pikia\Plugins\Console;

use Pikia\Kernel\MVC\View\View;
use Pikia\Kernel\Foundation\Connector;
use Pikia\Kernel\Plugins\Plugins;


class Console
{
	public static function hello()
	{		
		View::import("console","main");
	}

	public static function ini()
	{		
		
		//
		Connector::need();
		View::import("console","main");
	}

	public static function callControllers()
	{
		$alias = "console";
		$controllers = Plugins::getCore("console","controllers");
		//
		$path = "plugins/$alias/$controllers/";
		//
		self::call( self::fetch($path) , self::$path.'Console/' );
	}

	public static function fetch($path)
	{
		return Connector::fetch($path)
	}
}
