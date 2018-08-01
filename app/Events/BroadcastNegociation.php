<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\negociation;

class BroadcastNegociation
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $negociation;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( negociation $negociation )
    {
        $this->negociation = $negociation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('Negociation.' . $this->chat->user_id . '.' . $this->chat->project_id, function($user, $user_id, $project_id){
            
        } );
    }
}
