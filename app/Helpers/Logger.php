<?php

namespace App\Helpers;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class Logger {
    public static function log($activity) {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'activity' => $activity,
        ]);
    }
}
