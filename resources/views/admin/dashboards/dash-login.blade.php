<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TailwindCSS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-indigo-100">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-blue-600 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12">
            <div class="flex-grow">
                <h1 class="text-white text-center text-2xl sm:text-5xl mb-2">
                    Seja bem-vindo(a)
                </h1>
                <p class="text-center text-blue-200 sm:text-lg">
                    Faça seu login para começar
                </p>
            </div>
        </div>
        <div class="lg:min-h-screen lg:flex lg:items-center p-12 lg:p-24 xl:p-48">
            <div class="flex-grow bg-white shadow-xl rounded-md border border-gray-300 p-8">
                <div class="sm:flex sm:items-center">

                </div>
            </div>
        </div>
    </div>    

</body>
</html>