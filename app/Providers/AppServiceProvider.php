<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (str_starts_with((string) config('app.url'), 'https://') || $this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $site = null;
        $services = null;

        View::composer(['layouts.app', 'presentation', 'finishes.show', 'sample'], function ($view) use (&$site, &$services): void {
            $site ??= SiteSetting::current();
            $services ??= Service::query()->orderBy('sort_order')->get();

            $view->with('site', $site);
            $view->with('services', $services);
        });

        View::composer(['includes.navbar', 'frontend.*'], function ($view): void {
            if (! isset($view->getData()['pages'])) {
                $view->with('pages', \App\Models\Page::query()->orderBy('title')->get());
            }
        });
    }
}
