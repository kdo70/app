<div class="warning">
    <div class="warning-ico"></div>
    <div class="warning-content">
        @foreach($messages as $message)
            @if(is_array($message))
                @foreach($message as $item)
                    <div>{{ $item }}</div>
                @endforeach
            @else
                <div>{{ $message }}</div>
            @endif
        @endforeach
    </div>
    <div class="warning-control">
        <a href="/" class="modal-cancel-button" id="warning_close" type="reset" rel="modal:close">
            Close
        </a>
    </div>
</div>
