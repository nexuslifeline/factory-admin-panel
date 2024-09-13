<?php

namespace App\Models;

use App\Services\ModelEventLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'factory_name',
        'location',
        'email',
        'website',
    ];

    protected static function boot()
    {
        parent::boot();

        $eventLogger = new ModelEventLogger();

        static::created(function ($model) use ($eventLogger) {
            $eventLogger->logModelEvent('created', $model);
        });

        static::updated(function ($model) use ($eventLogger) {
            $changes = [
                'old' => $model->getOriginal(),
                'new' => $model->getChanges(),
            ];
            $eventLogger->logModelEvent('updated', $model, $changes);
        });

        static::deleted(function ($model) use ($eventLogger) {
            $eventLogger->logModelEvent('deleted', $model);
        });
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
