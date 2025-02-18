<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rental
 *
 * @property $date
 * @property $start_time
 * @property $end_time
 * @property $id_room
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @property Room $room
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rental extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['date', 'start_time', 'end_time', 'id_room', 'id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class, 'id_room', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user', 'id');
    }

}
