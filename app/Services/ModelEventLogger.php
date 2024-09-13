<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class ModelEventLogger
{
    public function logModelEvent(string $eventType, Model $model, array $changes = [])
    {
        $userId = Auth::check() ? Auth::id() : 'guest';

        $logData = [
            'event_type' => $eventType,
            'model' => get_class($model),
            'record_id' => $model->getKey(),
            'user_id' => $userId,
        ];

        if ($eventType === 'updated') {
            $logData['changes'] = $changes;
        }

        Log::info('Model Event:', $logData);
    }
}
