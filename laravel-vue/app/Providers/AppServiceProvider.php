<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Listener for Query Events, useful for debugging and logging queries
        // invokes a closure, on all SQL queries executed by the app

        //DB::listen(function (QueryExecuted $query){
            // $query->sql;
            // $query->bindings;
            // $query->time;
            // $query->toRawSql();


        //});
    }
}
