<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan MPASI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
    <style>
        .speech-bubble-left {
            position: absolute;
            bottom: -15px; /* Adjusted position */
            left: 50%; /* Adjusted position */
            transform: translateX(-50%); /* Center horizontally */
            border: 10px solid transparent;
            border-top-color: #bac044; /* Adjusted border color */
            border-bottom: 0; /* Adjusted border */
            border-left: 0; /* Adjusted border */
            margin-left: -10px; /* Adjusted margin */
        }
        
        .speech-bubble-right {
            position: absolute;
            bottom: -15px; /* Adjusted position */
            right: 50%; /* Adjusted position */
            transform: translateX(50%); /* Center horizontally */
            border: 10px solid transparent;
            border-top-color: #bac044; /* Adjusted border color */
            border-bottom: 0; /* Adjusted border */
            border-right: 0; /* Adjusted border */
            margin-right: -10px; /* Adjusted margin */
        }

        /* Adjusted size of images */
        img {
            max-width: 100%; /* Ensure images don't exceed their container */
            height: auto; /* Maintain aspect ratio */
        }

        /* Make left arrow icon larger */
        .fa-circle-left {
            font-size: 3em; /* Adjust size as needed */
        }

        /* Make card title larger */
        .card-title h1 {
            font-size: 3em; /* Adjust size as needed */
        }

        /* Make link icon larger */
        .large-icon {
            font-size: 3em; /* Adjust size as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card m-3 p-2 shadow-lg" style="background-color: #bac044; border-radius: 8px;">
                <div class="card-body">
                    <a href="{{ route('orangtua') }}"><i class="fa-regular fa-circle-left large-icon"></i></a>
                    <div class="card-title">
                        <div class="text-center">
                            <h1 class="mb-3">Panduan MPASI</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan1.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-left"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3"> <!-- Adjusted margin top -->
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan2.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-right"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3"> <!-- Adjusted margin top -->
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan3.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-left"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3"> <!-- Adjusted margin top -->
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan4.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-left"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3"> <!-- Adjusted margin top -->
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan5.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-right"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3"> <!-- Adjusted margin top -->
                        <div class="col position-relative text-center"> <!-- Adjusted column width -->
                            <img src="{{ asset('img/panduan/panduan6.jpg') }}" alt="panduan" style="border-radius: 8px;">
                            <div class="speech-bubble-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
