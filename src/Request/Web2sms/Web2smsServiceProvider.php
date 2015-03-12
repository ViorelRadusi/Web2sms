<?php namespace Request\Web2sms;

use Illuminate\Support\ServiceProvider,
    Illuminate\Foundation\AliasLoader;

class Web2smsServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the service provider.
   *
   * @return void
   */

  public function boot() {
    $this->package('request/web2sms');
    AliasLoader::getInstance()->alias('Web2sms', 'Request\Web2sms\Facades\Web2sms');
  }

  public function register() {
    $this->app['web2sms'] = $this->app->share(function($app) {
      return new SmsSender();
    });
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('web2sms');
  }

}
