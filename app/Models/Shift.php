<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $fillable = ['worker_id', 'type_shift_id'];
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['worker', 'typeShift'];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function typeShift()
    {
        return $this->belongsTo(TypeShift::class);
    }
}
