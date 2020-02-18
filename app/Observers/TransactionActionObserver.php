<?php

namespace App\Observers;

use App\Notifications\DataChangeEmailNotification;
use App\Transaction;
use Illuminate\Support\Facades\Notification;

class TransactionActionObserver
{
    public function created(Transaction $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Transaction'];
        $users = \App\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(Transaction $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'Transaction'];
        $users = \App\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(Transaction $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'Transaction'];
        $users = \App\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
