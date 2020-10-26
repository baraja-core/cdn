<?php

declare(strict_types=1);

namespace App;


use Latte\Engine;

final class Application
{
	public function run(): void
	{
		(new Engine)
			->render(__DIR__ . '/templates/Homepage.latte');
	}
}
