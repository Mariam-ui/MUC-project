<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" />

    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validation.js') }}"></script>

    <title>MUC</title>
</head>
<body>
@section('header')
@show
@yield('content')
@section('footer')
@show
</body>
<script>
    $(document).ready(function () {

        AOS.init();

        var messages_en = {
            name: "The name field is required.",
            message: "The message field is required.",
            email: {
                required: "The E-Mail field is required.",
                email: "Enter correct E-Mail address",
            }
        };

        var messages_ru = {
            name: "Необходимо ввести имя в поле.",
            message: "Поле сообщения является обязательным.",
            email: {
                required: "Поле E-Mail обязательно для заполнения.",
                email: "Введите правильный адрес электронной почты",
            }
        };

        var messages_de = {
            name: "Das Namensfeld ist erforderlich.",
            message: "Das Nachrichtenfeld ist erforderlich.",
            email: {
                required: "Das Feld E-Mail ist erforderlich.",
                email: "Geben Sie die richtige E-Mail-Adresse ein",
            }
        };
        var messages_fr = {
            name: "Vous devez entrer un nom dans le champ.",
            message: "Le champ de message est obligatoire.",
            email: {
                required: "Le champ E-Mail est obligatoire.",
                email: "S'il vous plaît, mettez une adresse email valide",
            }
        };

        var massage = messages_ru;
        if($('#local').val() != ''){
          if( $('#local').val() == 'en' )  {
              massage = messages_en;
          }else{
              if( $('#local').val() == 'de' ){
                  massage = messages_de;
              }
          }
        };
        $('#sendEmailForm').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: massage
        });

        if ($('body').width() >= 768){
            // intercept click event
            $('.sel-leng').on('click', function () {
                if ($('body').width() <= 768){
                    $('.menu').toggleClass('open');
                }else{
                    $(this).toggleClass('sel-leng');
                    $('.lengs').toggleClass('open');
                }
            });
        }

        $('.menu-tigger').on('click', function () {
            $(this).toggleClass('button-tigger');
            $('nav').toggleClass('open');
        });

        $(".menu .main-menu-list a").on("click", function(e) {
            e.preventDefault();
            if ($('body').width() <= 768){
                $('.menu').toggleClass('open');
            }
            const href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(href).offset().top - 71
            }, 600);
        });
        $(".menu .menu-footer-list a").on("click", function(e) {
            e.preventDefault();
            const href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(href).offset().top - 71
            }, 600);
        });

        $("#sendBtnHref").on("click", function(e) {
            e.preventDefault();
            const href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(href).offset().top - 71
            }, 600);
    });


    });

</script>
</html>