@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blinkit</title>
    <style>


        .carousel {
        width: 100%;
        overflow: hidden;
        }

        /* Style the individual carousel items */
        .carousel-inner {
        display: flex;
        transition: transform 0.3s ease;
        }

        .carousel-item {
        flex: 0 0 100%;
        max-width: 100%;
        }

        /* Style the navigation buttons */
        .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 1.5rem;
        padding: 0.5rem;
        border: none;
        z-index: 1;
        }

    </style>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
  const carouselInner = document.querySelector('.carousel-inner');
  const carouselItems = carouselInner.querySelectorAll('.carousel-item');
  const itemWidth = carouselItems[0].offsetWidth;
  let currentIndex = 0;

  const moveToIndex = (index) => {
    if (index < 0) {
      index = carouselItems.length - 1;
    } else if (index >= carouselItems.length) {
      index = 0;
    }

    currentIndex = index;

    const translateValue = -currentIndex * itemWidth;
    carouselInner.style.transform = `translateX(${translateValue}px)`;
  };

  // Automatically move to the next item every 3 seconds (3000 milliseconds)
  setInterval(() => {
    moveToIndex(currentIndex + 1);
  }, 3000);
});

    </script>
</head>
<body>
 


<div class="w-full relative">

<!-- 
<div class="carousel">
    <div class="carousel-inner relative flex overflow-hidden">
        @foreach ($products as $item)
        <div class="carousel-item relative bg-white w-full h-96 mx-4">
            <a href="/detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="object-cover w-full h-64" alt="Product Image">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$item['name']}}</h2>
                    <p class="text-gray-600">{{$item['description']}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div> -->


</div>
<div class="text-center my-6">
    <hr class="border-t-2 border-gray-300 mx-auto w-16">
    <span class="inline-block px-4 text-gray-600">Our Products</span>
    <hr class="border-t-2 border-gray-300 mx-auto w-16">
</div>

<div class="m-[30px] flex justify-evenly flex-wrap">
  @foreach ($products as $item)
  <a href="/detail/{{$item['id']}}" class="block mx-auto mb-8 max-w-xs">
    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
        <img class="h-48 w-full object-cover" src="{{$item['gallery']}}" alt="{{$item['name']}}">
        <div class="py-4 px-6">
            <h3 class="text-lg font-semibold mb-2">{{$item['name']}}</h3>
        </div>
    </div>
</a>

  @endforeach
</div>

</body>
</html>
@endsection