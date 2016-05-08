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
		$alias = Plugins::setAlias($alias);
		//
		return "plugins/$alias/resources/";
	}

	/**
	 * Get CSS file
	 */
	public static function css($path)
	{
		$route = self::resources();
		//
		Libs::css($route."style.css",false);
	}
}
