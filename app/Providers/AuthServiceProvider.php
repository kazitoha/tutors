<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
/** Add GateContract*/
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        // this is for admin
        $gate->define('isAdmin', function ($user) {
            return $user->user_type =='admin';
        });
        // this is for editor
        $gate->define('isEditor',function($user){
           return $user->user_type == 'editor';
        });
        // this is for user
        $gate->define('isUser',function($user){
            return $user->user_type == 'user';
         });
         // this is for create
        $this->registerPolicies($gate);
        $gate->define('isCreate', function ($user) {
            return $user->create_access =='create';
        });
        // this is for edit
        $gate->define('isEdit', function ($user) {
            return $user->edit_access =='edit';
        });
        // this is for delete
        $gate->define('isDelete', function ($user) {
            return $user->delete_access =='delete';
        });
    }
}
