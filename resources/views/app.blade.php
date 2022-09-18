<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    @vite('resources/css/vendors.min.css')
    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/bootstrap-extended.min.css')
    @vite('resources/css/colors.min.css')
    @vite('resources/css/components.min.css')
    @vite('resources/css/app.css')
    @inertiaHead
    <style>
        body {
            font-family: "Poppins", sans-serif !important;
        }
    </style>
</head>

<body>
    @inertia
    @vite('resources/js/app.js')
</body>

</html>
