<div class="cb-title">
    Account verification
</div>
<a class="close_verification" type="reset" rel="modal:close"></a>
<div class="verification_content">
    <p class="verification_p">
        Верификация учетной записи нужна для того, чтобы вы могли восстановить доступ в случае его утери.
    </p>
    <p class="verification_p">
        Для верификации учетной записи, необходимо подтвердить адрес электронной почты, письмо с инструкцией,
        будет отправлено после регистрации автоматически, обычно такое письмо приходит получателю в течении 3-5 минут.
    </p>
    <p class="verification_p">
        В случае, если вы по какой-то причине не получили письмо, то вы можете запросить его повторно, заполнив форму.
    </p>
    <form method="POST" class="verification_form" action="{{ route('web.login.notification') }}">
        @csrf
        <div class="verification_input">
            <label for="email">
                <span class="registration-required">
                    <span class="registration-requiredText">
                        Обязательное поле
                    </span>
                    *
                </span>
                Электронная почта
            </label>
            <input class="rfield registration-text-input" type="text" name="email" value="{{ old('email') }}"
                   autocomplete="off" id="email">
            <div class="verification_placeholder">
                Укажите адрес электронной почты, который был использован при регистрации учетной записи,
                мы повторно отправим вам письмо с инструкцией.
            </div>
        </div>
        <div class="verification_control">
            <button class="btn_submit medium_button" id="authentication" type="submit">
                Request instructions
            </button>
        </div>
    </form>
    <p class="verification_p">
        При возникновении проблем с верификацией учетной записи, обратитесь в
        <a href="" class="a_blue">техническую поддержку</a>.
    </p>
</div>
