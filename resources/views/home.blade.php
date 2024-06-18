<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo-web.PNG" rel="icon">
  <title>BabyBites | Auth</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/access-denied.css') }}">
</head>
<style>
    body {
        font-family: 'Cairo', sans-serif;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
    }

    .container {
        background: rgba(255, 255, 255, 0.1);
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1s ease-in-out;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        animation: slideIn 1s ease-out;
    }

    .btn-primary {
        background-color: #ff7e5f;
        border: none;
        padding: 10px 20px;
        font-size: 1.2rem;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary:hover {
        background-color: #feb47b;
        transform: scale(1.1);
    }

    .image-container {
        margin-top: 30px;
        animation: bounce 2s infinite;
    }

    .image-container img {
        width: 150px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
    }
</style>
</head>

<body>
<div class="container">
    <h1>Maaf, Anda tidak memiliki hak akses untuk mengakses halaman ini</h1>
    <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
    <div class="image-container">
        <img src="{{ asset('img/logo-web.png') }}" alt="Access Denied">
    </div>
</div>
</body>
</html>
