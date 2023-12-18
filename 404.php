<!DOCTYPE html>
<html lang="en">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/mainurl.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 90vh;
            background-color: #f2eee8;
            font-family: "Open Sans";
        }

        *,
        *:before,
        *:after {
            box-sizing: content-box;
            transform: translate3d(0, 0, 0);
        }

        .face {
            width: 200px;
            height: 200px;
            border: 4px solid #383a41;
            border-radius: 10px;
            background-color: #ffffff;
            margin: 0 auto;
            margin-top: 100px;
        }

        @media screen and (max-width: 400px) {
            .face {
                margin-top: 40px;
                transform: scale(0.8);
            }
        }

        .face .band {
            width: 240px;
            height: 20px;
            border: 4px solid #383a41;
            border-radius: 5px;
            margin-left: -25px;
            margin-top: 50px;
        }

        .face .band .red {
            height: calc(90% / 3);
            width: 100%;
            background-color: #fd631a;
            ;
        }

        .face .band .white {
            height: calc(90% / 3);
            width: 100%;
            background-color: #ffffff;
        }

        .face .band .blue {
            height: calc(90% / 3);
            width: 100%;
            background-color: #70e318;
            ;
        }

        .face .band:before {
            content: "";
            display: inline-block;
            height: 20px;
            width: 30px;
            background-color: rgba(255, 255, 255, 0.3);
            position: absolute;
            z-index: 999;
        }

        .face .band:after {
            content: "";
            display: inline-block;
            height: 20px;
            width: 30px;
            background-color: rgba(56, 58, 65, 0.3);
            position: absolute;
            z-index: 999;
            right: 0;
            margin-top: -27px;
        }

        .face .eyes {
            width: 128px;
            margin: 0 auto;
            margin-top: 40px;
        }

        .face .eyes:before {
            content: "";
            display: inline-block;
            width: 30px;
            height: 13px;
            border: 7px solid #383a41;
            margin-right: 20px;
            border-top-left-radius: 22px;
            border-top-right-radius: 22px;
            border-bottom: 0;
        }

        .face .eyes:after {
            content: "";
            display: inline-block;
            width: 30px;
            height: 13px;
            border: 7px solid #383a41;
            margin-left: 20px;
            border-top-left-radius: 22px;
            border-top-right-radius: 22px;
            border-bottom: 0;
        }

        .face .dimples {
            width: 180px;
            margin: 0 auto;
            margin-top: 15px;
        }

        .face .dimples:before {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 80px;
            border-radius: 50%;
            background-color: rgba(235, 109, 109, 0.4);
        }

        .face .dimples:after {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-left: 80px;
            border-radius: 50%;
            background-color: rgba(235, 109, 109, 0.4);
        }

        .face .mouth {
            width: 40px;
            height: 5px;
            border-radius: 5px;
            background-color: #383a41;
            margin: 0 auto;
            margin-top: 25px;
        }

        h1 {
            font-weight: 800;
            color: #383a41;
            text-align: center;
            font-size: 2.5em;
            padding-top: 20px;
        }

        @media screen and (max-width: 400px) {
            h1 {
                padding-left: 20px;
                padding-right: 20px;
                font-size: 2em;
            }
        }

        .btn {
            font-family: "Open Sans";
            font-weight: 400;
            padding: 20px;
            background-color: #5e7fdc;
            color: white;
            width: 320px;
            margin: 0 auto;
            text-align: center;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 80px;
            margin-bottom: 50px;
            transition: all 0.2s linear;
        }

        @media screen and (max-width: 400px) {
            .btn {
                margin: 0 auto;
                margin-top: 60px;
                margin-bottom: 50px;
                width: 200px;
            }
        }

        .btn:hover {
            background-color: rgba(94, 127, 220, 0.8);
            transition: all 0.2s linear;
        }
    </style>
</head>

<body style="height:90vh">
    <div class="face">
        <div class="band">
            <div class="red"></div>
            <div class="white"></div>
            <div class="blue"></div>
        </div>
        <div class="eyes"></div>
        <div class="dimples"></div>
        <div class="mouth"></div>
    </div>

    <h1>404</h1>
    <p style="text-align:center;">Oops! Something went wrong!</p>
    <a href="<?= URL ?>" style="text-decoration:none">
        <div class="btn">Return to Home</div>
    </a>
</body>

</html>