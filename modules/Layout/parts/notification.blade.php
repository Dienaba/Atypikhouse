<?php
$checkNotify = \Modules\Core\Models\NotificationPush::query();
$notifications = 0;
if(is_admin()){
    $checkNotify->where(function($query){
        $query->where('data', 'LIKE', '%"for_admin":1%');
        $query->orWhere('notifiable_id', Auth::id());
    });
}else{
    $checkNotify->where('data', 'LIKE', '%"for_admin":0%');
    $checkNotify->where('notifiable_id', Auth::id());
}
$notifications = $checkNotify->orderBy('created_at', 'desc')->limit(5)->get();
$countUnread = $checkNotify->where('read_at', null)->count();
?>

<li class="dropdown-notifications dropdown p-0">
    <a href="#" data-toggle="dropdown" class="is_login">
        <i class="icofont-flash"></i>
        <span class="badge badge-danger notification-icon">{{$countUnread}}</span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu overflow-auto notify-items dropdown-container dropdown-menu-right dropdown-large">
        <div class="dropdown-toolbar">
            <div class="dropdown-toolbar-actions">
                <a href="#" class="markAllAsRead">{{__('Marquer tout comme lu')}}</a>
            </div>
            <h3 class="dropdown-toolbar-title">{{__('Notifications AtypikHouse')}} (<span class="notif-count">{{$countUnread}}</span>)</h3>
        </div>
        <ul class="dropdown-list-items p-0">
            @if(count($notifications)> 0)
                @foreach($notifications as $oneNotification)
                    @php
                        $active = $class = '';
                        $data = json_decode($oneNotification['data']);

                        $idNotification = @$data->id;
                        $forAdmin = @$data->for_admin;
                        $usingData = @$data->notification;

                        $services = @$usingData->type;
                        $idServices = @$usingData->id;
                        $title = @$usingData->message;
                        $name = @$usingData->name;
                        $avatar = @$usingData->avatar;
                        $link = @$usingData->link;

                        if(empty($oneNotification->read_at)){
                            $class = 'markAsRead';
                            $active = 'active';
                        }
                    @endphp
                    <li class="notification {{$active}}">
                        <a class="{{$class}} p-0" data-id="{{$idNotification}}" href="{{$link}}">
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object">


                                    
                                    </div>
                                </div>
                                <div class="media-body">
                                    {!! $title !!}
                                    <div class="notification-meta">
                                        <small class="timestamp">{{format_interval($oneNotification->created_at)}}</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
        <div class="dropdown-footer text-center">
            <a href="{{route('core.notification.loadNotify')}}">{{__('View More')}}</a>
        </div>
    </ul>
</li>
