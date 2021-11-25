<div class="login-footer">
    <div class="login-footer-text">
        @if ($errors->any()){{ $errors->first() }}
        @else
            Enter your username and password, or register an account.
        @endif
    </div>
</div>
