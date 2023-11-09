import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
window.Pusher = Pusher;

import { current } from './libs/current.js';

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: current.pusher.key,
    cluster: current.pusher.cluster,
    wsHost: current.pusher.wsHost,
    wsPort: current.pusher.wsPort,
    wssPort: current.pusher.wssPort,
    forceTLS: false,
    enableTransports: ['ws', 'wss']
});

import 'elements/turbo-echo-stream-tag';
import 'libs';
