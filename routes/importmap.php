<?php

use Tonysm\ImportmapLaravel\Facades\Importmap;

Importmap::pinAllFrom('resources/js', to: 'js/', preload: true);
Importmap::pin("laravel-echo", to: "https://ga.jspm.io/npm:laravel-echo@1.15.3/dist/echo.js");
Importmap::pin("pusher-js", to: "https://ga.jspm.io/npm:pusher-js@8.3.0/dist/web/pusher.js");
Importmap::pin("axios", to: "https://ga.jspm.io/npm:axios@1.5.1/index.js");
Importmap::pin("#lib/adapters/http.js", to: "https://ga.jspm.io/npm:@jspm/core@2.0.1/nodelibs/@empty.js");
Importmap::pin("#lib/platform/node/classes/FormData.js", to: "https://ga.jspm.io/npm:@jspm/core@2.0.1/nodelibs/@empty.js");
Importmap::pin("#lib/platform/node/index.js", to: "https://ga.jspm.io/npm:@jspm/core@2.0.1/nodelibs/@empty.js");
Importmap::pin("@hotwired/turbo", to: "https://ga.jspm.io/npm:@hotwired/turbo@7.3.0/dist/turbo.es2017-esm.js");
Importmap::pin("@hotwired/stimulus", to: "https://ga.jspm.io/npm:@hotwired/stimulus@3.2.2/dist/stimulus.js");
Importmap::pin("@hotwired/stimulus-loading", to: "vendor/stimulus-laravel/stimulus-loading.js", preload: true);Importmap::pin("el-transition", to: "https://ga.jspm.io/npm:el-transition@0.0.7/index.js");
Importmap::pin("@github/time-elements", to: "https://ga.jspm.io/npm:@github/time-elements@4.0.0/dist/index.js");
