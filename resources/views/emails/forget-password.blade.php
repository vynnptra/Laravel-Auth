<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hai,</p>
    <p>Anda meminta reset password. Klik tautan di bawah untuk mengatur ulang password Anda:</p>
    <p><a href="{{ url('/reset-password/'.$token) }}">Reset Password</a></p>
    <p>Jika Anda tidak meminta reset password, abaikan email ini.</p>

</body>
</html>