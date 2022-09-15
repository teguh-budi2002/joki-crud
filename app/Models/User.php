<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\CoreFamily;
use App\Models\DataWorker;
use App\Models\PowerAndWeak;
use App\Models\PostCommunity;
use App\Models\InterestAndHope;
use App\Models\HistoryEducation;
use Laravel\Sanctum\HasApiTokens;
use App\Models\EducationNonFormal;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'tmpt_tinggal'
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasOne(Post::class);
    }

    public function secondPosts() {
        return $this->hasOne(SecondPost::class);
    }

    public function historyPosts() {
        return $this->hasOne(HistoryEducation::class);
    }

    public function educationNonFormal() {
        return $this->hasOne(EducationNonFormal::class);
    }

    public function postDataWorker() {
        return $this->hasOne(DataWorker::class);
    }

    public function postCommunity() {
        return $this->hasOne(PostCommunity::class);
    }

    public function IOPost() {
        return $this->hasOne(InterestAndHope::class);
    }

    public function PWPost() {
        return $this->hasOne(PowerAndWeak::class);
    }

    public function salary() {
        return $this->hasOne(Salary::class);
    }

    public function coreFamily() {
        return $this->hasOne(CoreFamily::class);
    }
}
