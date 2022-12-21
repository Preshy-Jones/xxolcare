<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Builder::macro('searchxxolstars', function ($string) {
            return $string ? $this->where('first_name', 'like', '%' . $string . '%')->orwhere('last_name', 'like', '%' . $string . '%')->orwhere('email', 'like', '%' . $string . '%')->orwhereJsonContains('specialization', $string) : $this;
        });
        Builder::macro('searchusers', function ($string) {
            return $string ? $this->where('name', 'like', '%' . $string . '%')->orwhere('email', 'like', '%' . $string . '%') : $this;
        });
        Builder::macro('searchfinances', function ($string) {
            return $string ? $this->where('title', 'like', '%' . $string . '%')->orwhere('contact', 'like', '%' . $string . '%')->orwhere('assigned', 'like', '%' . $string . '%') : $this;
        });
        Collection::macro('searchjobs', function ($string) {
            return $this->filter(function ($vale) use ($string) {
                return stristr('service_name', $string) ||
                stristr('address', $string);
            });

            // return $string ? ($this->where('service_name', 'like', '%' . $string . '%') ? $this->where('address', 'like', '%' . $string . '%') : $this) : $this;
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
        Schema::defaultStringLength(191);

    }
}
