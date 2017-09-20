<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'employee_id';
    protected $fillable = ['employee_id', 'day', 'day_morning_from', 'day_morning_to', 'day_afternoon_from', 'day_afternoon_to'];
    public    $timestamps = false;
}
