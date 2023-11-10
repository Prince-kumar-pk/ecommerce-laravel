

<?php
use App\Http\Controllers\ProductController;
$total = 0;

if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Blinkit</title>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Blinkit-yellow-app-icon.svg/3500px-Blinkit-yellow-app-icon.svg.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Blinkit</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
        <form action="/search" class="ml-auto flex items-center space-x-4">
                <div class="relative">
                    <input type="text" name="query"
                        class="bg-white w-80 text-black pl-8 pr-2 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Search" />
                    <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
                </div>
                <button
                    class=" text-red-400 py-2 px-4"
                    type="submit"><i class="fa fa-search" style="font-size:30px"></i></button>
                <a href="/cartlist"
                    class="text-black flex items-center space-x-1">
                    <i class="fa fa-cart-arrow-down" style="font-size:24px"></i>
                    <span
                        class="text-blue-300 px-2 py-1 rounded-full">{{ $total }}</span>
                </a>
            </form>
            @if(Session::has('user'))

            <a href="/logout" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
            @else
            <a href="/login" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            <a href="/register" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
            @endif
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="/" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/myorders" class="text-gray-900 dark:text-white hover:underline">Orders</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
</body>

</html>
