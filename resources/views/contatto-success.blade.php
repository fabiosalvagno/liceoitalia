@include('partials.head')

<body class="bg-white">
    @include('partials.navbar')

    <section class="container mx-auto px-4 py-16 text-center">
        <br>
        <h1 class="text-3xl font-bold text-green-700 mb-6">お問い合わせを受け付けました</h1>
        <p class="text-lg text-gray-700 mb-8">Ho ricevuto il tuo messaggio. Ti risponderò al più presto.</p>

        <a href="{{ url('/') }}"
           class="inline-block bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow">
            ホームに戻る / Torna alla Home
        </a>
    </section>

    @include('partials.footer')
</body>
