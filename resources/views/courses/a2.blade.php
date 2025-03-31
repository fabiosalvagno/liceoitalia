{{-- resources/views/courses/a2.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Italia - A1クラス</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-white">
    @include('partials.navbar')

    <section class="container mx-auto px-4 my-12">
        <h2 class="text-3xl font-bold mb-4">入門レベル（A1未満） イタリア語講座</h2>
        <p class="mb-6 leading-relaxed">
            この講座は<strong>イタリア語ゼロからの入門レベル（A1未満）</strong>です。<br>
            まったく初めての方でも安心して始められます。<br>
            会話・文法・ライティングをバランスよく練習し、少しずつ自信を持って話せるようになります。
        </p>

        <ul class="list-disc list-inside mb-6 text-gray-700">
            <li>✅ <strong>テーマ別の会話練習</strong>（簡単な表現で自然な会話を目指します）</li>
            <li>✅ <strong>文法練習</strong>（直接法を中心とした基礎練習）</li>
            <li>✅ <strong>ライティング練習</strong>（短い文章で表現の幅を広げます）</li>
        </ul>
    </section>

    <hr class="my-12 border-gray-300">

    <section class="container mx-auto px-4 my-12">
        <h3 class="text-2xl font-bold mb-6">📘 使用教材</h3>

        <div class="">
            <img src="https://www.almaedizioni.it/wp-content/uploads/2025/02/NEPLUS1_cover_web-600x800.png"
                alt="Nuovo Espresso Plus 1" class="w-40 mb-4 shadow-lg rounded-lg">

            <p class="text-gray-700 leading-relaxed mb-4">
                授業では <strong>「Nuovo Espresso Plus 1」</strong>（Alma Edizioni）を使用します。<br>
                初めて学ぶ方にもやさしく、日常会話・語彙・文法がバランスよく構成された一冊です。<br>
                ゆっくりとしたペースで、しっかり基礎を固めていきます。
            </p>

            <a href="https://www.almaedizioni.it/prodotto/nuovo-espresso-plus-1/"
                target="_blank"
                class="inline-block bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-5 rounded shadow mb-6">
                公式サイトで見る
            </a>

            <h4 class="text-xl font-bold mt-6 mb-2">💰 受講料・教材費</h4>
            <ul class="list-disc list-inside text-gray-700">
                <li>月謝（4回分）: <strong class="text-pink-600">12,000円</strong></li>
                <li>教材費（書籍）: <strong class="text-pink-600">5,000円</strong></li>
            </ul>
        </div>
    </section>

    <hr class="my-12 border-gray-300">

    <section class="container mx-auto px-4 my-12">
        <h3 class="text-2xl font-bold mb-4">📅 講座スケジュール</h3>
        <p class="mb-4 leading-relaxed">
            <strong>開催日:</strong> 毎週 <span class="font-bold">月曜日</span> 10:30〜12:00（オンラインまたは対面）<br>
            <strong>次回開催日:</strong> <span class="text-red-500">4月14日（月）</span>
        </p>

        <h4 class="text-xl font-bold mt-6 mb-2">📩 お問い合わせ</h4>
        <p class="mb-4">ご質問やお申し込みは、以下のボタンを押してください。</p>
        <a href="{{ url('/contatto') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow">
            問い合わせ
        </a>
    </section>

    @include('partials.footer')
</body>
</html>
