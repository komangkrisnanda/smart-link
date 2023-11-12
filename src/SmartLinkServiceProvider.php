<?php

namespace SmartLink;

use Illuminate\Support\ServiceProvider;

class SmartLinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/smartlink.php' => config_path('smartlink.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/smartlink.php', 'smartlink');

        $this->app->bind('SmartLink', function () {
            $smartLink = new SmartLink();
            $smartLink->setPackageName(config('smartlink.package_name'));
            $smartLink->setDesktopURL(config('smartlink.desktop_url'));
            return $smartLink;
        });
    }
}
