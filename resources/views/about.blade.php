@include('partials.head')
<body class="bg-white">

    @include('partials.navbar') <!-- Navbar を挿入 -->

    <div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-4">講師プロフィール</h1>

    <div class="text-gray-700 leading-relaxed mb-8">
        <p class="mb-4">はじめまして、Fabio Salvagnoです。イタリア語講師として、日本で30年以上活動しています。</p>

        <h2 class="text-2xl font-bold mb-3">職歴・経験</h2>
        <ul class="list-disc list-inside mb-6">
            <li>30年以上のイタリア語指導経験（初心者～上級者）</li>
            <li>イタリア語テキストや教材の著作・出版（Amazonで8冊出版）</li>
            <li>CILS試験の試験官経験（イタリア語能力試験）</li>
            <li>大学・語学学校・企業研修での指導経験多数</li>
            <li>イタリア語教育に関する教材執筆、翻訳、監修</li>
        </ul>

        <h2 class="text-2xl font-bold mb-3">主な出版物</h2>
        <ul class="list-disc list-inside mb-6">
            <li>『Ciao 1、2（イタリア語テキスト）』</li>
            <li>『イタリア語基礎文法』シリーズ</li>
            <li>『Passeggiate veneziane』（日本語訳付きイタリア語プチ小説シリーズ）</li>
        </ul>

        <h2 class="text-2xl font-bold mb-3">提供可能なサービス</h2>
        <ul class="list-disc list-inside">
            <li>オンラインおよび対面でのイタリア語レッスン</li>
            <li>イタリア語・日本語間の通訳・翻訳サービス</li>
            <li>イタリア語学習相談・アドバイス</li>
        </ul>
    </div>

</div>
    @include('partials.footer')

</body>
</html>
