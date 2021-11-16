<form method="POST" class="registration-form" action="{{ route('login') }}">
    @csrf
    <div class="registration-form-left">
        <div class="registration-input">
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
            <div class="registration-placeholder">
                Мы не будем отправлять вам рассылку без вашего согласия,
                почта нужна, что бы восстановить доступ к аккаунту, вводите настоящий E-mail,
                на него будет отправлено письмо с инструкцией по активации.
            </div>
        </div>
        <div class="registration-input">
            <label for="username">
                <span class="registration-required">
                    <span class="registration-requiredText">
                        Обязательное поле
                    </span>
                    *
                </span>
                Имя пользователя
            </label>
            <input class="rfield registration-text-input" type="text" name="username" value="{{ old('username') }}"
                   autocomplete="off" id="username">
            <div class="registration-placeholder">
                Будет использовано для идентификации пользователя, при входе в личный кабинет.
            </div>
        </div>
        <div class="registration-input">
            <label for="password">
                <span class="registration-required">
                    <span class="registration-requiredText">
                        Обязательное поле
                    </span>
                    *
                </span>
                Пароль
            </label>
            <input class="rfield registration-text-input" type="password" name="password" autocomplete="off">
            <div class="registration-placeholder">
                Требуется для входа в личный кабинет.
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                <span class="registration-required">
                    <span class="registration-requiredText">
                        Обязательное поле
                    </span>
                    *
                </span>
                Повторите пароль
            </label>
            <input class="rfield registration-text-input" type="password" name="rePassword" autocomplete="off">
            <div class="registration-placeholder">
                Требуется, что бы проверить что вы не ошиблись при вводе пароля.
            </div>
        </div>
        <div class="registration-input">
            <label for="birthday">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +10
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +10
                    </span>
                Имя
            </label>
            <input class="registration-text-input" type="text" name="name" value="{{ old('name') }}"
                   autocomplete="off" id="name">
            <div class="registration-placeholder">
                Представьтесь, что бы участники сообщества, знали как к вам обращаться.
            </div>
        </div>
        <div class="registration-input">
            <label for="birthday">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +5
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +5
                    </span>
                Дата рождения
            </label>
            <input class="registration-text-input" type="text" name="birthday" value="{{ old('birthday') }}"
                   autocomplete="off" id="birthday">
            <div class="registration-placeholder">
                Мы поздравим вас в ваш день рождения.
            </div>
        </div>
    </div>
    <div class="registration-form-right">
        <div class="registration-input">
            <label for="experience">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +3
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +3
                    </span>
                Опыт игры
            </label>
            <select id="experience" name="experience" size="2">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
                <option value="january">Более 10 лет</option>
            </select>
            <div class="registration-placeholder">
                Вы опытный игрок, или совсем новичок?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Любимая профессия
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Duelist или Mystic Muse, а может быть Dominator?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Любимый город
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Какой город нравится больше Talking Island Village или Town of Oren, или же другой?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Любимая локация
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Какая из локаций наиболее атмосферная Execution Grounds или Antharas' Lair?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Стиль игры
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Какой стиль игры вы предпочитаете?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                PK
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Убиваете ли вы игроков в PK?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Великая олимпиада
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Более 10 лет</option>
                <option value="february">Более 5 лет</option>
                <option value="march">Более 3 лет</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Участвуете ли вы в великой олимпиаде?
            </div>
        </div>
        <div class="registration-input">
            <label for="rePassword">
                    <span class="registration-plus">
                        <span class="registration-plusText">
                                <span class="registration-plus">
                                 +1
                                </span>
                                Бонус за заполнение поля
                            </span>
                        +1
                    </span>
                Командный игрок
            </label>
            <select id="experience" name="experience">
                <option value="hide">Select</option>
                <option value="january">Immortal Plateau, Northern Region</option>
                <option value="february">Immortal Plateau, Southern Region</option>
                <option value="march">Talking Island, Eastern Territory</option>
                <option value="april">Более 1 года</option>
                <option value="may">Играю впервые</option>
            </select>
            <div class="registration-placeholder">
                Предпочитаете играть один или играете в команде?
            </div>
        </div>
    </div>
    <div class="registration-control">
        <button class="btn_submit disabled login-button" type="submit">
            Submit
        </button>
        <a class="modal-cancel-button" type="reset" rel="modal:close">
            Close
        </a>
    </div>
</form>
