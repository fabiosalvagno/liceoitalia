@include('partials.head')

<body class="bg-white">

    @include('partials.navbar') <!-- ここでnavbarを挿入 -->

    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <!-- <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('img/carousel/image1.jpg') }}"></div>
            <div class="swiper-slide"><img src="{{ asset('img/carousel/image2.jpg') }}"></div>
            <div class="swiper-slide"><img src="{{ asset('img/carousel/image3.jpg') }}"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div> -->



    <section class="container mx-auto px-4 my-12">
    <h2 class="text-4xl font-bold mb-6">Benvenuti nel cuore della lingua italiana</h2>
    <p class="text-lg leading-relaxed text-gray-700">
        静かな朝、バールのエスプレッソの香りとともに、ローマの石畳を歩く。<br>
        フィレンツェの広場では、歴史ある建築が陽光に照らされ、<br>
        ヴェネツィアの運河には、ゴンドラが静かに揺れている。<br><br>
        ここで学ぶイタリア語は、単なる言葉ではなく、<br>
        文化と歴史、情熱が息づくコミュニケーションの扉を開く鍵。<br>
        本場の雰囲気を感じながら、一緒に学びませんか？
    </p>
</section>

    <hr class="my-8 border-gray-300">

    <section class="container mx-auto px-4 my-12">
        <h2 class="text-3xl font-bold mb-4">中上級（B2）イタリア語会話クラス</h2>
        <p class="mb-6 leading-relaxed">
            毎週火曜日 朝5:30〜<br>
            静かな早朝の時間を有効活用して、イタリア語の表現力とコミュニケーション能力を高めませんか？<br>
            ニュースやイタリアの文化をテーマに、自然なスピードで日常会話を練習します。<br>
            「朝活」として、知的で充実した一日をスタートしましょう。<br><br>
            <strong>対象者：</strong><br>
            ・イタリア語で自由に意見交換したい方<br>
            ・中級からさらに上級を目指したい方
        </p>
        <a href="{{ url('/courses/b2') }}" class="inline-block bg-pink-300 hover:bg-pink-500 text-white py-2 px-6 rounded-lg shadow">
            詳細を見る
        </a>
    </section>

    <hr class="my-12 border-gray-300">

    <section class="container mx-auto px-4 my-12">
        <h2 class="text-3xl font-bold mb-4">初級（A2）イタリア語 土曜集中コース（全11回）</h2>
        <p class="mb-6 leading-relaxed">
            毎週土曜日 10:00〜11:30<br>
            初めてイタリア語に触れる方、短期間で実用的な基礎をしっかり身につけたい方向けの集中コースです。<br>
            全11回のレッスンで、旅行や日常会話に役立つ基本的な表現や文法を体系的に学びます。<br>
            週末の朝を活用し、楽しく効率的にイタリア語の基礎を固めましょう。<br><br>
            <strong>対象者：</strong><br>
            ・楽しく基礎からイタリア語を学びたい方<br>
            ・旅行や日常生活ですぐ使える会話力を身につけたい方
        </p>
        <a href="{{ url('/courses/a2') }}" class="inline-block bg-pink-300 hover:bg-pink-500 text-white py-2 px-6 rounded-lg shadow">
            詳細を見る
        </a>
    </section>

    @include('partials.footer')

</body>

</html>
