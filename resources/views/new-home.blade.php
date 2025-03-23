@include('partials.head')

<body class="bg-white">

@include('partials.navbar') <!-- ナビゲーションバー -->

<section class="my-12 px-4">
    <!-- <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Uno sguardo sull’Italia</h2> -->

    <div class="swiper w-full max-w-3xl mx-auto rounded-lg shadow-md overflow-hidden">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="{{ asset('img/landing/venezia-desktop-01.jpg') }}" alt="Venezia 1" class="w-full h-auto">
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="{{ asset('img/landing/venezia-desktop-02.jpg') }}" alt="Venezia 2" class="w-full h-auto">
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('img/landing/venezia-desktop-03.jpg') }}" alt="Venezia 3" class="w-full h-auto">
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>


<!-- Introduzione (Hero Section) -->
<section class="flex flex-col md:flex-row items-center justify-center my-12 px-8">
    <div class="md:w-1/2">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">🌍 イタリアを感じて、話して、楽しもう！</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
            「イタリア語を学ぶ」って、ただ言葉を覚えることだけじゃありません。<br>
            それはイタリアの街角にいるような、温かくて、ちょっと陽気な時間を過ごすことです。<br><br>
            Fabioは京都から、みなさんをイタリアの「今」に連れて行きます。<br>
            一緒に話して、一緒に笑って、一緒にイタリアを感じましょう。<br><br>
            授業では、現在のイタリア社会について話し合います。ニュース、音楽、ラジオドラマ、そして懐かしい映画の場面まで。<br>
            楽しく話しているうちに、イタリア語が少しずつ身につきます。
        </p>
        <a href="#contatti"
           class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg mt-4">
            お問い合わせはこちら
        </a>
    </div>
    <div class="md:w-1/2">
        <img src="{{ asset('img/landing/Coffee-shop-bro.svg') }}" alt="Italian Conversation"
             class="w-full rounded-lg shadow-md">
    </div>
</section>

<!-- Corso A2 -->
<section class="flex flex-col md:flex-row-reverse items-center justify-center bg-gray-100 py-12 px-8">
    <div class="md:w-1/2">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">📖 初級（A2）土曜集中コース</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
            イタリア語を基礎から学びたい方におすすめ！<br>
            短期間で旅行や日常生活に役立つ表現を習得できます。
        </p>
        <p class="mt-2"><strong>📍 京都教室 | 🕒 毎週土曜日 10:00〜11:30</strong></p>
        <a href="{{ url('/courses/a2') }}"
           class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg mt-4">
            詳細を見る
        </a>
    </div>
    <div class="md:w-1/2">
        <img src="{{ asset('img/landing/Travelers-pana.svg') }}" alt="Italian Class A2"
             class="w-full rounded-lg shadow-md">
    </div>
</section>

<!-- Corso B2 -->
<section class="flex flex-col md:flex-row items-center justify-center py-12 px-8">
    <div class="md:w-1/2">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">🗣️ 中上級（B2）会話クラス（オンライン）</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
            イタリア語で自由に意見を交換したい方へ。<br>
            ニュースや文化をテーマに、より深い会話力を磨きます。
        </p>
        <p class="mt-2"><strong>🖥️ オンライン授業 | 🕒 毎週火曜日 5:30〜6:30</strong></p>
        <a href="{{ url('/courses/b2') }}"
           class="inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded-lg mt-4">
            詳細を見る
        </a>
    </div>
    <div class="md:w-1/2">
    <img src="{{ asset('img/landing/Online-Review-pana.svg') }}" 
     alt="Italian Class B2"
     class="block w-full rounded-lg shadow-md">

    </div>
</section>

<!-- Contatti -->
<section id="contatti" class="text-center bg-gray-200 py-12">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">📩 お問い合わせ</h2>
    <p class="text-lg text-gray-700">詳細を知りたい方は、お気軽にお問い合わせください。</p>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeB8yxHSPesab2wBeErGcK3MqYPVk1g-kmkESneqa0hETgQHw/viewform?usp=dialog"
       target="_blank"
       class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg mt-4">
        ✉️ お問い合わせフォーム
    </a>
</section>

@include('partials.footer') <!-- フッター -->

</body>
</html>
