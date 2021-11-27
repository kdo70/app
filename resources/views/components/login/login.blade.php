<div class="login">
    <form method="POST" class="login-form" action="{{ route('web.login.authentication') }}">
        @csrf
        <div class="login-input">
            <label for="username">ID</label>
            <input class="login-text-input" type="text" name="username" value="{{ old('login') }}"
                   autocomplete="off">
        </div>
        <div class="login-input">
            <label for="password">PWD</label>
            <input class="login-text-input" type="password" name="password"
                   autocomplete="off">
        </div>
        <div class="login-control">
            <button class="btn_submit login-button" id="authentication" type="submit">
                Log in
            </button>
            <button class="login-button" type="reset" onclick="location.href='{{route('web.index')}}';">
                Exit
            </button>
        </div>
    </form>
</div>

