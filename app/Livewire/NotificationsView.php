<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Throwable;

class NotificationsView extends Component
{
    #[Layout('layouts.app')] 
    public function render()
    {
        return view("livewire.notifications-view", [
            'notifications'=> Notification::paginate(10)
        ]);
    }

}
