<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lineage 2 Chronicle 5: Oath of Blood</title>
    <link rel="SHORTCUT ICON" href="img/favicon.ico">

    {{-- style:start --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link href="css/orion.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{-- style:end --}}
    {{-- script:start --}}
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7-beta.29/jquery.inputmask.min.js"
            integrity="sha512-Ax4+qW2rAVWrk3SU1ef/L8O0jF6vKSfaMIR3du6efzf5v/pibzDcLFx29YCeR7WphoPO4zranQFsFUf+9Rb+dg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- script:end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</head>
<body>
@yield('body')
@stack('scripts')
<script type="text/javascript">
    try {
        $({{request()->route()->getAction('name')}}).addClass("active nohover");
    } catch (e) {
        console.log('%c Welcome! ', 'background: #101934; color: #E2CEAB;');
        console.log('%c Lineage 2 Chronicle 5: Oath of Blood ', 'background: #101934; color: #E2DAC2;');
    }
</script>
</body>
</html>
