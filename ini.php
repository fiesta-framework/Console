<?php 

namespace Pikia\Plugins\Console;

use Pikia\Kernel\MVC\View\View;
use Pikia\Kernel\Foundation\Connector;
use Pikia\Kernel\Plugins\Plugins;
use Pikia\Kernel\Foundation\Application;


class Console
{
	public static function setup($ajax)
	{		
		View::import("console","main",array("ajax" => $ajax));
	}

	public static function ini()
	{		
		self::callControllers();
	}

	protected static function callControllers()
	{
		$controllers = self::fetch('controllers');
		//
		Connector::using($controllers);
	}

	protected static function fetch($path)
	{
		return glob(Application::$root."plugins/console/$path/*.php");
	}
}

/**
 * Init the plugin
 */

Console::ini();
