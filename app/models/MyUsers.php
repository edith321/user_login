<?php

namespace App\models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class MyUsers extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public $incrementing = false;

    /**
     * Table name
     * @var string
     */
    protected $table = 'myUsers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'surname', 'number', 'fb_url', 'age',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Function which automatically generates and adds UUID for model
     * if id is not set
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                //TODO check if code will work without else statement
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }
}
