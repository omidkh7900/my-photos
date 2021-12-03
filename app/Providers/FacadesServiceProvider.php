<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Bindings\MediaService;
use App\Contracts\Services\Bindings\MediaService as MediaContractService;

class FacadesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MediaContractService::class, fn () => new MediaService);
    }
}
