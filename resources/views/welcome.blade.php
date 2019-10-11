<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content=" {{ csrf_token() }} ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ secure_url('css/app.css') }}">
</head>
<body>
    <h1>Hello world</h1>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam amet nobis deleniti nam in assumenda officiis consectetur, reiciendis culpa. Magnam nam blanditiis, ut harum quo quod quam quasi. Maiores, ducimus!

    <script src="{{ secure_url('js/app.js') }}"></script>
    <script>
        $('h1').click(function (e) { 
            e.preventDefault();
            $(this).hide();
        });
    </script>
</body>
</html>