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
    try {

        $({{request()->route()->getName()}}).addClass("active nohover");

    }catch (e) {console.log("🕷️ <-- Паук! Ааа!");
    }
</script>
</html>
