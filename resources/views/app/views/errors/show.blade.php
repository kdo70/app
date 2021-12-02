@extends('app.layouts.body')
@section('body')<div class="warning">
    <div class="warning-ico"></div>
    <div class="warning-content">
                <div>{{ $message }}</div>
    </div>
    <div class="warning-control">
        <a @if($link) href="{{$link}}" @endif class="modal-cancel-button" id="warning_close" type="reset"
           rel="modal:close">
            Close
        </a>
    </div>
</div>

@endsection
