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
    <script src="js/mask.js"></script>
    {{-- script:end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</head>
<body>
@yield('body')
</body>
@stack('scripts')
<script>
    $(document).on("ajaxComplete", function (e) {
        Inputmask({
            alias: "datetime", inputFormat: "dd-mm-yyyy",
            min: '01/01/1960',
            max: '01/01/2015'
        }).mask("birthday");
        Inputmask({mask: {"mask": "Aa{1,20}"}}).mask("name");
        Inputmask({mask: {"mask": "aa{1,20}"}}).mask("username");
        Inputmask({mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]"}).mask("email");
        Inputmask({mask: {"mask": "(999) 999-9999"}}).mask("phone");
    });
    $({{request()->route()->getName()}}).addClass("active nohover");
</script>
</html>
