<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cancer Share</title>

    <!-- Link for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link for CSS -->
    <style>
        .container {
            font-family: 'Signika', sans-serif;
        }

        .mail-logo {
            display: flex;
            align-items: center;
            margin-top: 3vh;
        }

        .mail-logo-icon {
            max-width: 60%;
            height: auto;
            display: block;

        }

        .cancershare-icon-mail {
            max-width: 8vw;
            border-right: 1px solid #16222c;
            max-height: 16vh;
        }

        .company-name-mail {
            font-weight: bold;
            font-size: 24px;
            margin-left: 2vw;
            margin-bottom: 0;
        }

        .mail-content {
            margin: 2vh 12vw 8vh;
            text-align: justify;
        }

        .mail-title {
            font-weight: bold;
            font-size: 36px;
        }

        .mail-content-text,
        .mail-close {
            font-size: 24px;
        }

        .mail-button {
            text-align: center;
            margin: 2vh 0;
        }

        .mail-close {
            font-weight: bold;
        }

        .btn-mail{
            font-weight: bold;
            background-color: #033d68;
            border-color: #033d68;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-mail:hover {
            background-color: #021829;
            border-color: #021829;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.7);
        }

        .footer-mail {
            text-align: center;
        }

        .footer-mail-text {
            color: #A0A0A0;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="container" style="font-family: 'Signika', sans-serif">
        <div class="mail-logo">
            <div class="cancershare-icon-mail">
                <img src="https://drive.google.com/uc?export=view&id=1Mqkp1xnbQYZaP_kf7yNqUNtF5QhK4xFK" class="mail-logo-icon" />
            </div>
            <p class="company-name-mail">Cancer Share</p>
        </div>
        <div class="mail-content">
            <div class="mail-title">Halo,  {{ $details['nama'] }}!</div>
            <p class="mail-content-text">Kami mendapat kabar bahwa Anda mendapat masalah saat ingin masuk ke
                CancerShare. Mohon maaf atas ketidaknyamanannya dan kami akan segera membantu Anda untuk mengatasi
                masalah ini. Anda dapat mengatur ulang kata sandi Anda dengan klik pada tombol di bawah ini. </p>
            <div class="mail-button">
                <a href="#" role="button" class="btn-mail">Atur Ulang Kata Sandi</a>
            </div>
            <p class="mail-close">Salam, CancerShare.</p>
        </div>
        <div class="footer-mail">
            <p class="footer-mail-text"> © 2021 Pikachu inc. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>
