<div class="cb">
    <div class="cb-title" id="title">Community - Events</div>
    <a class="close" href=""></a>
    <a class="hide" href=""></a>
    <div id="tabs">
        <a class="manage" id="manage" href="{{ route('web.manage') }}">Manage</a>
        <x-community-board-menu/>
        <div class="tabs-items">
            <div class="tabs-item">
                <div class="{{$actionName}}-left"></div>
                <div class="{{$actionName}}-right"></div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
