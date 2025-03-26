@include('partials.head')

<body class="bg-white">
    @include('partials.navbar')

    <section class="container mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold mb-6">📩 Contattami・問い合わせ</h1>

        @if(session('successo'))
            <div class="mb-4 text-green-600 font-semibold">
                {{ session('successo') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contatto.invia') }}" class="space-y-4 max-w-xl">
            @csrf

            <div>
                <input type="text" name="nome" placeholder="Il tuo nome・お名前" required 
                       class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div>
                <input type="email" name="email" placeholder="La tua email・メールアドレス" required 
                       class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div>
                <textarea name="messaggio" placeholder="Il tuo messaggio・内容" required rows="4" 
                          class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>

            <div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded">
                    Invia
                </button>
            </div>
        </form>
    </section>

    @include('partials.footer')
</body>
