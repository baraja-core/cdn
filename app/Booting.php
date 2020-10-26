<?php

declare(strict_types=1);

namespace App;


use Nette\Loaders\RobotLoader;
use Nette\Utils\FileSystem;
use Tracy\Debugger;

final class Booting
{
	public static function getApplication(): Application
	{
		self::boot();

		return new Application;
	}


	private static function boot(): void
	{
		FileSystem::createDir($logDir = __DIR__ . '/../log');
		Debugger::enable(null, $logDir);

		$robotLoader = new RobotLoader;
		$robotLoader->addDirectory(__DIR__);
		$robotLoader->setTempDirectory(__DIR__ . '/../temp/robotLoader');
		$robotLoader->register();
	}
}
