@include('partials.head')

<body class="bg-white">

@include('partials.navbar')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Books</h1>

    @foreach ($books as $categoryName => $booksInCategory)
        <h2 class="text-2xl font-bold mb-4">{{ $categoryName }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @foreach ($booksInCategory as $book)
                <div class="rounded-lg shadow-md overflow-hidden flex flex-col">
                    <div class="h-72 overflow-hidden">
                        <img src="{{ asset('img/books/' . $book->image) }}" class="w-full h-full object-contain">
                    </div>
                    <div class="p-4 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold mb-2">{{ $book->title }}</h3>
                        <p class="text-gray-600 flex-1">{!! $book->description !!}</p>
                        <a href="{{ $book->amazon_link }}" target="_blank"
                           class="mt-auto inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-center">
                            Amazonで見る
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

@include('partials.footer')

</body>
</html>
