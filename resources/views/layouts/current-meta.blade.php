<meta name="current-pusher-key" content="{{ config('broadcasting.connections.pusher.key') }}">
<meta name="current-pusher-cluster" content="{{ config('broadcasting.connections.pusher.options.cluster') }}">
<meta name="current-pusher-wsHost" content="{{ config('broadcasting.connections.pusher.options.host') }}">
<meta name="current-pusher-wsPort" content="{{ config('broadcasting.connections.pusher.options.port') }}">
<meta name="current-pusher-forceTLS" content="{{ json_encode(boolval(config('broadcasting.connections.pusher.options.useTLS'))) }}">
