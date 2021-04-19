<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, SoftDeletes, HasFactory, Notifiable;

    protected $table = 'users';


    //protected $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "email_verified_at",
        "password",
        "remember_token",
        "domain",
        "subdomain",
        "logo",
        "facebook",
        "facebook_page_id",
        "facebook_pixel",
        "google_analytics",
        "whatsapp",
        "email_contact",
        "site_title",
        "site_keywords",
        "site_description",
        "next_expiration",
        "disabled_account",
        "delete_account",
        "plan_id",
        "status",
    ];

    /**
     * Protege de atualizações
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
