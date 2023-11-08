<div id="notifications" class="fixed top-10 left-0 right-0 flex flex-col items-center justify-center space-y-2 z-10 opacity-80">
    @if (session()->has('status'))
        <div class="py-1 px-4 leading-7 text-center text-white rounded-full bg-gray-900 transition-all animate-appear-then-fade-out" data-controller="flash" data-action="animationend->flash#remove">
            {{ session('status') }}
        </div>
    @endif
</div>
