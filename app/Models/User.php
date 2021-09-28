<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'chuc_vu_id',
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

    public function chuc_vu() {
        return $this->belongsTo(ChucVu::class, 'chuc_vu_id');
    }

    public function nhan_vien() {
        return $this->hasOne(NhanVien::class, 'user_id');
    }

    public function khach_hang(){
        return $this -> hasOne(KhachHang::class, 'user_id');
    }

    public function binh_luan(){
        return $this -> hasMany(BinhLuan::class,  'user_id');
    }
}
