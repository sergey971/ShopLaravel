<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

   public function getGender()
    {
        return [
            self::GENDER_MALE => "Мужской",
            self::GENDER_FEMALE => "Женский",
        ];
    }

    public function getGenderTitleAttribute()
    {
        $genders = $this->getGender();
        return $genders[$this->gender] ?? 'Не указан';

//        $genders = $this->getGender();
//        return $genders[$this->gender] ?? 'Не указан';

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'patronymic',
        'age',
        'address',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    public function getCasts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
