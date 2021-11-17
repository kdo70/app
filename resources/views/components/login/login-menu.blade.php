<div class="login-menu">
    <ul>
        <li>
            <a href="{{route('template.registration')}}" id="registration" data-modal>
                Register account
            </a>
        </li>
        <li>
            <a href="{{route('template.restore')}}" id="restore" data-modal>
                Restore account
            </a>
        </li>
        <li>
            <a href="{{route('template.verification')}}" id="verification" data-modal>
                Verification
            </a>
        </li>
        <li>
            <a href="{{route('template.developers')}}" id="developers" data-modal>
                Developers
            </a>
        </li>
        <li>
            <a href="{{route('template.records')}}" id="records" data-modal>
                Event records
            </a>
        </li>
    </ul>
</div>
@push('scripts')
    <script type="text/javascript">
        $('a[data-modal]').click(function () {
            $('.login').hide();
            $('.login-menu').hide();
            $(this).modal({
                modalClass: $(this).attr('id'),
                showClose: false,


                spinnerHtml: '<div class="preload-modal"><img src="img/cb/step.png" width="50" height="50" alt="Lineage 2 oath of blood preloader"></div>',

                showSpinner: true,      // Enable/disable the default spinner during AJAX requests.
                fadeDuration: null,     // Number of milliseconds the fade transition takes (null means no transition)
                fadeDelay: 1.0          // P
            });
            return false;
        });
        $(function () {
            $(document).on($.modal.CLOSE, function () {
                $('.login').show();
                $('.login-menu').show();
            });
        });
        //$(document).on("ajaxComplete", function (e) {
        Inputmask({
            alias: "datetime", inputFormat: "dd-mm-yyyy",
            min: '01/01/1960',
            max: '01/01/2015'
        }).mask("birthday");
        Inputmask({mask: {"mask": "Aa{1,20}"}}).mask("name");
        Inputmask({mask: {"mask": "aa{4,20}"}}).mask("username");
        Inputmask({mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]"}).mask("email");


        $('select').each(function () {
            var $this = $(this), numberOfOptions = $(this).children('option').length;

            $this.addClass('select-hidden');
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled"></div>');

            var $styledSelect = $this.next('div.select-styled');
            $styledSelect.text($this.children('option').eq(0).text());

            var $list = $('<ul />', {
                'class': 'select-options',
                'style': 'height: 200px;overflow: auto;'
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }
            var $listItems = $list.children('li');


            $styledSelect.click(function (e) {
                if ($('.select-options').is(':visible')) {
                    e.stopPropagation();
                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $list.hide();
                } else {
                    e.stopPropagation();
                    $('div.select-styled.active').each(function () {
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                }
            });

            $listItems.click(function (e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
            });

            $(document).click(function () {
                $styledSelect.removeClass('active');
                $list.hide();
            });
        });

        (function ($) {

            $(function () {

                $('.registration-form').each(function () {
                    // Объявляем переменные (форма и кнопка отправки)
                    var form = $(this),
                        btn = form.find('.btn_submit');

                    // Добавляем каждому проверяемому полю, указание что поле пустое
                    form.find('.rfield').addClass('empty_field');

                    // Функция проверки полей формы
                    function checkInput() {
                        form.find('.rfield').each(function () {
                            if ($(this).val() != '') {
                                // Если поле не пустое удаляем класс-указание
                                $(this).removeClass('empty_field');
                            } else {
                                // Если поле пустое добавляем класс-указание
                                $(this).addClass('empty_field');
                            }
                        });
                    }

                    // Функция подсветки незаполненных полей
                    function lightEmpty() {
                        form.find('.empty_field').css({'border-color': 'rgba(132, 121, 99, 0.5)'});
                        // Через полсекунды удаляем подсветку
                        setTimeout(function () {
                            form.find('.empty_field').removeAttr('style');
                        }, 500);
                    }

                    // Проверка в режиме реального времени
                    setInterval(function () {
                        // Запускаем функцию проверки полей на заполненность
                        checkInput();
                        // Считаем к-во незаполненных полей
                        var sizeEmpty = form.find('.empty_field').length;
                        // Вешаем условие-тригер на кнопку отправки формы
                        if (sizeEmpty > 0) {
                            if (btn.hasClass('disabled')) {
                                return false
                            } else {
                                btn.addClass('disabled')
                            }
                        } else {
                            btn.removeClass('disabled')
                        }
                    }, 500);

                    // Событие клика по кнопке отправить
                    btn.click(function () {
                        if ($(this).hasClass('disabled')) {
                            // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
                            lightEmpty();
                            return false
                        } else {
                            var $form = $(this);
                            var formData = new FormData(document.getElementsByName('.registration-form')[0]);
                            console.log($form.serialize())
                            $.ajax({
                                type: $form.attr('method'),
                                url: formData,
                                data: $form.serialize()
                            }).done(function() {
                                console.log('success');
                            }).fail(function() {
                                console.log('fail');
                            });
                        }
                    });
                });
            });

        })(jQuery);
        // });
        //
        $(function() {
            $('.registration-form').submit(function(e) {
                //отмена действия по умолчанию для кнопки submit
                e.preventDefault();
            });
        });
    </script>
@endpush
