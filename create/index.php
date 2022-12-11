<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
    body{
        background-image: url("../bg.png");
        background-size: 100% 100%;
        background-repeat: repeat-y;
    }
    form{
        background: linear-gradient(0deg, #7fc7ff, white);
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        border: none;
    }
    div .form{
        width: auto;
        padding: 75px;
    }
    a{
        width: 100%;
        height: 50px;
        font-size: 10px;
    }
    </style>
    <title>Гостевая книга</title>
</head>
<body class="d-flex justify-content-md-center align-items-center vh-100">
            <div class="d-grid gap-3" style="width: 650px; padding: 75px">
                <form action="script.php" method="post">
                <div class="form">
                    <input type="text" class="form-control" placeholder="Ваше имя (обязательно)" id="name" name="name"required>
                    <br>
                    <input type="email" class="form-control" placeholder="Ваш email (обязательно)" id="email" name="email" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Homepage (необязательно)" id="homepage" name="homepage">
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LetvG4jAAAAAINAJN3snODSprVUyVEYMk4LOKq2" style="padding: 0px; width: auto" id="captcha" name="captcha"></div>
                    <br>
                    <textarea class="form-control" placeholder="Оставьте комментарий здесь" id="textarea" name="textarea" required></textarea>
                    <br>
                    <input type="submit" class="form-control">
                </div>
                </form>
            </div>
            
</body>
</html>