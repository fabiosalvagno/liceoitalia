{{-- resources/views/courses/a2.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Italia - A2クラス</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-white">
    @include('partials.navbar')

    <section class="container mx-auto px-4 my-12">
        <h2 class="text-3xl font-bold mb-4">A2レベル イタリア語講座</h2>
        <p class="mb-6 leading-relaxed">
            この講座では、<strong>実際のイタリアのニュース（RaiNews）</strong>を題材にして、会話力と文法力を伸ばします。<br>
            直接法を中心に、実際のニュースを使って自然な表現を学びます。
        </p>

        <ul class="list-disc list-inside mb-6 text-gray-700">
            <li>✅ <strong>テーマ別の会話練習</strong>（実際のニュースをもとにした対話形式）</li>
            <li>✅ <strong>文法練習</strong>（直接法の基礎＋関連する表現）</li>
            <li>✅ <strong>ライティング練習</strong>（ニュースの内容に対する回答を作成）</li>
        </ul>
    </section>

    <hr class="my-12 border-gray-300">

    <section class="container mx-auto px-4 my-12">
        <h3 class="text-2xl font-bold mb-4">📅 講座スケジュール</h3>
        <p class="mb-4 leading-relaxed">
            <strong>開催日:</strong> 毎週土曜日 10:00〜11:30（週によってオンラインまたは対面）<br>
            <strong>次回開催日:</strong> <span class="text-red-500">4月12日（土）</span>
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