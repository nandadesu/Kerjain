<?php
    header( "refresh:10;url=index.php" );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IKIA- Sending</title>

    <style>
        .container {
            height: 50px;
            width: 40px;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }

        .container::after {
            content: '📩 📫';
            color: #007298;
            font-weight: 700;
            width: 50px;
            position: absolute;
            bottom: -60px;
            left: -10px;
        }

        .box {
            position: relative;
            height: 50px;
            width: 40px;
            animation: box 5s infinite linear;
        }

        .border {
            background: #007298;
            position: absolute;
        }

        .border.one {
            height: 4px;
            top: 0;
            left: 0;
            animation: border-one 5s infinite linear;
        }

        .border.two {
            top: 0;
            right: 0;
            height: 100%;
            width: 4px;
            animation: border-two 5s infinite linear;
        }

        .border.three {
            bottom: 0;
            right: 0;
            height: 4px;
            width: 100%;
            animation: border-three 5s infinite linear;
        }

        .border.four {
            bottom: 0;
            left: 0;
            height: 100%;
            width: 4px;
            animation: border-four 5s infinite linear;
        }

        .line {
            height: 4px;
            background: #007298;
            position: absolute;
            width: 0%;
            left: 25%;
        }

        .line.one {
            top: 25%;
            width: 0%;
            animation: line-one 5s infinite linear;
        }

        .line.two {
            top: 45%;
            animation: line-two 5s infinite linear;
        }

        .line.three {
            top: 65%;
            animation: line-three 5s infinite linear;
        }

        @keyframes border-one {
            0% {
                width: 0;
            }

            10% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes border-two {
            0% {
                height: 0;
            }

            10% {
                height: 0%;
            }

            20% {
                height: 100%;
            }

            100% {
                height: 100%;
            }
        }

        @keyframes border-three {
            0% {
                width: 0;
            }

            20% {
                width: 0%;
            }

            30% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes border-four {
            0% {
                height: 0;
            }

            30% {
                height: 0%;
            }

            40% {
                height: 100%;
            }

            100% {
                height: 100%;
            }
        }

        @keyframes line-one {
            0% {
                left: 25%;
                width: 0;
            }

            40% {
                left: 25%;
                width: 0%;
            }

            43% {
                left: 25%;
                width: 50%;
            }

            52% {
                left: 25%;
                width: 50%;
            }

            54% {
                left: 25%;
                width: 0%
            }

            55% {
                right: 25%;
                left: auto;
            }

            63% {
                width: 10%;
                right: 25%;
                left: auto;
            }

            100% {
                width: 10%;
                right: 25%;
                left: auto;
            }
        }

        @keyframes line-two {
            0% {
                width: 0;
            }

            42% {
                width: 0%;
            }

            45% {
                width: 50%;
            }

            53% {
                width: 50%;
            }

            54% {
                width: 0%
            }

            60% {
                width: 50%
            }

            100% {
                width: 50%;
            }
        }

        @keyframes line-three {
            0% {
                width: 0;
            }

            45% {
                width: 0%;
            }

            48% {
                width: 50%;
            }

            51% {
                width: 50%;
            }

            52% {
                width: 0%
            }

            100% {
                width: 0%;
            }
        }

        @keyframes box {
            0% {
                opacity: 1;
                margin-left: 0px;
                height: 50px;
                width: 40px;
            }

            55% {
                margin-left: 0px;
                height: 50px;
                width: 40px;
            }

            60% {
                margin-left: 0px;
                height: 35px;
                width: 50px;
            }

            74% {
                msthin-left: 0;
            }

            80% {
                margin-left: -50px;
                opacity: 1;
            }

            90% {
                height: 35px;
                width: 50px;
                margin-left: 50px;
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="box">
            <div class="border one"></div>
            <div class="border two"></div>
            <div class="border three"></div>
            <div class="border four"></div>

            <div class="line one"></div>
            <div class="line two"></div>
            <div class="line three"></div>
        </div>
    </div>
</body>
</html>