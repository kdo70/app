<div class="cb">
    <div class="cb-title" id="title">Community - Events</div>
    <a class="close" href=""></a>
    <a class="hide" href=""></a>
    <div id="tabs">
        <a class="manage" id="manage" href="{{ route('manage') }}">Manage</a>
        <x-community-board-menu/>
        <div class="tabs-items">
            <div class="tabs-item">
                <div class="{{request()->route()->getName()}}-left"></div>
                <div class="{{request()->route()->getName()}}-right"></div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
