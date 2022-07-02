<form method="POST" class="registration-form" action={{route('web.login.registration')}}>
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
                Почта нужна для того, чтобы верифицировать учетную запись.
                Мы отправим на нее письмо с ссылкой для подтверждения.
                Так же почта нужна, что бы иметь возможность востановить доступ, в случае его утери.
                Мы не будем отправлять вам рассылку, без вашего согласия.
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
                   autocomplete="off" id="username" placeholder="Минимум 5 символов">
            <div class="registration-placeholder">
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
            <input class="rfield registration-text-input" type="password" name="password"
                   autocomplete="off" id="password" placeholder="Минимум 8 символов">
            <div class="registration-placeholder">
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
            <input class="rfield registration-text-input" type="password" name="password_confirmation"
                   autocomplete="off" id="password_confirmation" placeholder="Минимум 8 символов">
            <div class="registration-placeholder">
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
                   autocomplete="off" id="firstname" placeholder="Минимум 3 символа">
            <div class="registration-placeholder">
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
                   autocomplete="off" id="birthday" placeholder="01.01.1980">
            <div class="registration-placeholder">
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
                Гендер
            </label>
            <select id="experience" name="experience" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($genders as $gender)
                    <option value="{{$gender->id}}">{{$gender->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Милорд или миледи? Мы хотим, знать больше о нашей аудитории, для подсчета статистики.
            </div>
        </div>
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
                <option value="" selected disabled hidden>...</option>
                @foreach($experiences as $experience)
                    <option value="{{$experience->id}}">{{$experience->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Вы новичок или опытный игрок?
            </div>
        </div>
        <div class="registration-input">
            <label for="profession">
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
            <select id="profession" name="professionId" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($professions as $profession)
                    <option value="{{$profession->id}}">{{$profession->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Duelist или Mystic Muse, а может быть Dominator?
            </div>
        </div>
        <div class="registration-input">
            <label for="town">
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
            <select id="town" name="townId" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($towns as $town)
                    <option value="{{$town->id}}">{{$town->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Какой город нравится больше Talking Island Village или Town of Oren, или же другой?
            </div>
        </div>
        <div class="registration-input">
            <label for="location">
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
            <select id="location" name="locationId" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($locations as $location)
                    <option value="{{$location->id}}">{{$location->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Какая из локаций наиболее атмосферная Execution Grounds или Antharas' Lair, или другая?
            </div>
        </div>
        <div class="registration-input">
            <label for="style">
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
            <select id="style" name="styleId" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($styles as $style)
                    <option value="{{$style->id}}">{{$style->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Какой стиль игры вы предпочитаете?
            </div>
        </div>
        <div class="registration-input">
            <label for="$pk">
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
            <select id="pk" name="pkId" size="2">
                <option value="" selected disabled hidden>...</option>
                @foreach($pks as $pk)
                    <option value="{{$pk->id}}">{{$pk->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Убиваете ли вы соперников в PK?
            </div>
        </div>
        <div class="registration-input">
            <label for="olympiad">
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
            <select id="olympiad" name="olympiadId">
                <option value="" selected disabled hidden>...</option>
                @foreach($olympiads as $olympiad)
                    <option value="{{$olympiad->id}}">{{$olympiad->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Участвуете ли вы в великой олимпиаде?
            </div>
        </div>
        <div class="registration-input">
            <label for="command">
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
            <select id="command" name="commandId">
                <option value="" selected disabled hidden>...</option>
                @foreach($commands as $command)
                    <option value="{{$command->id}}">{{$command->label}}</option>
                @endforeach
            </select>
            <div class="registration-placeholder">
                Предпочитаете играть один или в команде?
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
