<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lineage 2 Chronicle 5: Oath of Blood</title>
    <link rel="SHORTCUT ICON" href="img/favicon.ico">

    {{-- style:start --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link href="css/orion.css" rel="stylesheet"/>
    <link href="css/all.min.css" rel="stylesheet">
    {{-- style:end --}}
    {{-- script:start --}}
    <script src="js/jquery.js"></script>
    {{-- script:end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</head>
<body>
@yield('body')
</body>
@stack('scripts')
<script>
    $.modal.BEFORE_BLOCK = 'login-logo';
    console.log($.modal);
    $({{request()->route()->getName()}}).addClass("active nohover");
</script><script type="text/javascript" charset="utf-8">
    $(function() {

        function log_modal_event(event, modal) {
            $('.login').show();
            $('.login-menu').show();
            if(typeof console != 'undefined' && console.log) console.log("[event] " + event.type);
        };

        $(document).on($.modal.CLOSE, log_modal_event);
    });
</script>
</html>
