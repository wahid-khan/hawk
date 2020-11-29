<?php

namespace App\Providers;

use App\billing\BankPaymentGateway;
use App\billing\CreditPaymentGateway;
use Illuminate\Support\Facades\Schema;
use App\billing\PaymentGatewayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app)
        {
            if(request()->has('credit')){
                return new CreditPaymentGateway('USD');     
            }

            return new BankPaymentGateway('USD');
        });
    }
}
