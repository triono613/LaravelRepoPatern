<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Task\TaskInterface;
use App\Repository\Task\TaskRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskInterface::class,TaskRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
