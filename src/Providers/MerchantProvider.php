<?php

namespace Chicofreitas\Merchant\Providers;

use Illuminate\Support\ServiceProvider;

class MerchantProvider extends ServiceProvider {
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/../../routes/web.php');
    }
}