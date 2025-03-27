{{-- resources/views/courses/b2.blade.php --}}
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Italia - Corso B2</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-white">
    @include('partials.navbar')

    <section class="container mx-auto px-4 my-12">
        <h2 class="text-3xl font-bold mb-4">🗣️ Corso di conversazione (B2)</h2>
        <p class="mb-6 leading-relaxed">
            <strong>⚠️ Nota importante:</strong><br>
            Questa classe è interamente in italiano. Per partecipare è necessario avere una buona comprensione scritta e orale.
        </p>

        <h3 class="text-2xl font-bold mt-6 mb-4">🕒 Orario</h3>
        <p class="mb-6 leading-relaxed">
            Ogni <strong>martedì</strong> dalle <strong>5:30 alle 6:30</strong> di mattina.<br>
            Registrazione entro <strong>domenica alle 10:00</strong>.
        </p>

        <h3 class="text-2xl font-bold mt-6 mb-4">👥 Numero di partecipanti</h3>
        <p class="mb-6 leading-relaxed">Classe da <strong>1 a 4 persone</strong>.</p>

        <h3 class="text-2xl font-bold mt-6 mb-4">🖥️ Metodo</h3>
        <p class="mb-6 leading-relaxed">Lezione <strong>online tramite Zoom</strong>.</p>

        <h3 class="text-2xl font-bold mt-6 mb-4">📚 Materiale</h3>
        <p class="mb-6 leading-relaxed">
            Dopo la registrazione e il pagamento, lo studente riceverà il materiale.<br>
            <strong>📝 Importante:</strong> lo studente dovrà scrivere un breve commento sul contenuto e pubblicarlo su <strong>Moodle</strong> entro lunedì sera.
        </p>

        <a href="https://moodle.fabiosalvagno.com" target="_blank"
           class="inline-block bg-pink-700 hover:bg-pink-900 text-white font-bold py-2 px-6 rounded-lg shadow-lg">
            Accedi a Moodle
        </a>

        <h3 class="text-2xl font-bold mt-6 mb-4">📖 Struttura della lezione</h3>
        <ul class="list-disc list-inside mb-6">
            <li>📝 <strong>Breve spiegazione del tema</strong></li>
            <li>💬 <strong>Commento da parte di ogni studente e discussione</strong></li>
            <li>✍️ <strong>10 minuti di scrittura da condividere su Moodle</strong></li>
            <li>📌 <strong>Pratica di grammatica: uso del condizionale e del congiuntivo</strong></li>
        </ul>

        <h3 class="text-2xl font-bold mt-6 mb-4">📩 Registrazione</h3>
        <p class="mb-4">ご質問やお申し込みは、以下のボタンを押してください。</p>
        <a href="{{ url('/contatto') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow">
            問い合わせ
        </a>
    </section>

    @include('partials.footer')
</body>
</html>
