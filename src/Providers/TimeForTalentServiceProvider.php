<?php namespace TimeForTalent\Providers;

use Illuminate\Support\ServiceProvider;

class TimeForTalentServiceProvider extends ServiceProvider
{

  /**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			dirname(__DIR__).'/views' => base_path('resources/views/vendor/TimeForTalent'),
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		include dirname(__DIR__).'/routes.php';

    $this->app->bind(
			'TimeForTalent\Repositories\DevelopmentMethod\DevelopmentMethodInterface',
			'TimeForTalent\Repositories\DevelopmentMethod\DevelopmentMethodRepository'
		);


		$this->app->bind(
			'TimeForTalent\Repositories\Skill\SkillInterface',
			'TimeForTalent\Repositories\Skill\SkillRepository'
		);

		$this->app->bind(
			'TimeForTalent\Repositories\Resource\ResourceInterface',
			'TimeForTalent\Repositories\Resource\ResourceRepository'
		);
	}

}
