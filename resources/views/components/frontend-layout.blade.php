<!DOCTYPE html>
<html lang="en">
<head>
    
    @vite('resources/css/app.css')
    <style>
        .container {
            width: 90%;
            margin: auto;
            
        }
    </style>    

</head>
<body>
     <x-frontend-navbar />

     {{ $slot }}
</body>
</html>