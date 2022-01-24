<?php

namespace App\View\Components;

use App\Services\ContentTypeService;
use App\Services\NotificationService;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    protected $url;
    public $contentTypes;
    public $allNotifications;
    public $totalUnseenNotifications;
    public function __construct(ContentTypeService $contentTypeService,NotificationService $notificationService)
    {
        $this->url = request()->segment(1);
        $this->contentTypes = $contentTypeService->listByContentWithStatus();
        $this->allNotifications= $notificationService->getAllNotification();
        $this->totalUnseenNotifications= $notificationService->getTotalUnseenNotification();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->url == 'admin'){
            return view('components.admin.navbar');
        } else{
            return view('components.frontend.navbar');
        }
    }
}
