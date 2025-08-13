<!DOCTYPE html>
<html lang="en">
<head>
    
    @vite('resources/css/app.css')
    <style>
        .container {
            width: 85%;
            margin: auto;
            
        }
    </style>    

</head>
<body>
     <x-frontend-navbar />

     {{ $slot }}
</body>
</html>