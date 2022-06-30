<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Intro</title>
</head>
<body>
   
   <h1>Laravel Tuts</h1>
   <p>
      type: {{ $type }}
   </p>
   <p>
      base: {{ $base }}
   </p>
   <p>
      price: {{ $price }}
   </p>

   @if($price == 10)
      <p>
         Price is {{$price}} so price is cheap
      </p>
   @endif

   @php
       $price = 20;
   @endphp

   @if($price >= 10)
      <p>
         Price has changed to {{$price}} so price is not cheap
      </p>
   @endif

   {{-- This is a comment --}}

   @unless (Auth::check())
      <p>
         You are not signed in.
      </p>
   @endunless
   
</body>
</html>