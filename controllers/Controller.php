<?php 

namespace Pikia\Plugins\Console;

use Pikia\Kernel\Resources\Libs;
use Pikia\Kernel\Plugins\Plugins;


class Controller
{
	/**
	 * Get Path of resources
	 */
	public static function resources()
	{
		return "plugins/console/resources/";
	}

	/**
	 * Get CSS file
	 */
	public static function css($path)
	{
		$route = self::resources();
		//
		Libs::css($route."$path.css",false);
	}

	/**
	 * Get JS file
	 */
	public static function js($path)
	{
		$route = self::resources();
		//
		Libs::js($route."$path.js",false);
	}
}
