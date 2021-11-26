/**
 * Вызов модельного окна.
 * Любая ссылка с атрибутом "data-modal", будет вызывать модельное окно.
 * Ожидается, что в качестве идентификатора ссылки, указан класс модального окна.
 */
$('a[data-modal]').click(function () {

    hideLoginElement();

    $(this).modal({
        modalClass: $(this).attr('id'),
        showClose: false,
        showSpinner: false,
        fadeDuration: null,
        fadeDelay: 1.0
    });

    return false;
});

/**
 * Модальное окно: форма регистрации.
 */
$(registration).on($.modal.AJAX_COMPLETE, function () {

    $(birthday).inputmask({
        alias: "datetime", inputFormat: "dd-mm-yyyy", min: '01/01/1960', max: '01/01/2015', "clearIncomplete": true
    });
    $(email).inputmask("*{1,50}[.*{1,50}][.*{1,50}]@*{1,50}.*{1,20}[.*{1,20}][.*{1,20}]", {
        "clearIncomplete": true
    });
    $(username).inputmask("*{5,20}", {
        "clearIncomplete": true
    });
    $(firstname).inputmask("Aa{1,20}", {
        "clearIncomplete": true
    });
    $(password).inputmask("*{8,20}", {
        "clearIncomplete": true
    });
    $(password_confirmation).inputmask("*{8,20}", {
        "clearIncomplete": true
    });

    select();

    validator('.registration-form');
});

/**
 * Custom validator.
 */
function validator(selector) {
    var form = $(selector);
    form.each(function () {
            var form = $(this),
                btn = form.find('.btn_submit');
            form.find('.rfield').addClass('empty_field');

            function checkInput() {
                form.find('.rfield').each(function () {
                    if ($(this).val() != '') {
                        $(this).removeClass('empty_field');
                    } else {
                        $(this).addClass('empty_field');
                    }
                });
            }

            function lightEmpty() {
                form.find('.empty_field').css({'border-color': 'rgba(132, 121, 99, 0.5)'});
                setTimeout(function () {
                    form.find('.empty_field').removeAttr('style');
                }, 500);
            }

            setInterval(function () {
                checkInput();
                var sizeEmpty = form.find('.empty_field').length;
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

            btn.click(function () {
                if ($(this).hasClass('disabled')) {
                    lightEmpty();
                    return false
                } else {
                    $.ajax({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: form.serialize()
                    }).done(function (response) {
                        $(response.modal).appendTo('body').modal({
                            modalClass: 'warning',
                            showClose: false,
                            showSpinner: false
                        });
                    }).fail(function (response) {
                        $(response.responseJSON.modal).appendTo('body').modal({
                            modalClass: 'warning',
                            showClose: false,
                            showSpinner: false,
                            closeExisting: false
                        });
                    });
                }
            });
        }
    );
    form.submit(function (e) {
        e.preventDefault();
    });
}

/**
 * Custom select.
 */
function select() {
    $('select').each(function () {
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul/>', {
            'class': 'select-options',
            'style': 'height: 162px;overflow: auto;'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li/>', {
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
}

/**
 * Скрыть окно логина, и элементы навигации.
 */
function hideLoginElement() {
    $('.login').hide();
    $('.login-menu').hide();
}

/**
 * Показать окно логина, и элементы навигации.
 */
function showLoginElement() {
    $('.login').show();
    $('.login-menu').show();
}

/**
 * Обработчик закрытия, модального окна.
 */
$(function () {
    $(document).on($.modal.CLOSE, function (e) {
        var login = ['registration'];
        if (login.includes(e.target.className)) {
            showLoginElement();
        }
    });
});

/**
 * Отображение preloader, при ajax запросах.
 */
$(document).on({
    ajaxStart: function () {
        var html = '<div class="preload_modal"><img src="img/cb/step.png" width="50" height="50" alt="Pointer"></div>';
        $("body").append(html);
    },
    ajaxStop: function () {
        $(".preload_modal").remove();
    }
});
