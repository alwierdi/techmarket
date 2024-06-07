<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Admin</title>
</head>
<body class="h-full">
<div class="min-h-full">
  <x-navbar></x-navbar>

  <x-header>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    Profile
  </x-header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      @foreach ($posts as $posts)
        
      <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/profile/{{ $posts['id'] }}" class="hover:underline">
          <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $posts['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
          <a href="#">{{ $posts['author'] }}</a> | 34 Januari 2024
        </div>
        <p class="my-4 font-light">{{ Str::limit($posts['body'], 100) }}</p>
        <a href="/profile/{{ $posts['id'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
      </article>
      @endforeach
      
    </div>
  </main>
</div>

</body>
</html>