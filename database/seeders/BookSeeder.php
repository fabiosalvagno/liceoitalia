<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ← これを追加

class BookSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Ciao 1',
                'description' => '初回のレッスンからイタリア語を活用する」という理念のもと、このテキストは作成されました。自己紹介から始め、周囲の物の説明や友人・家族の紹介へと進みます。その後、イタリア旅行中に遭遇するであろうシチュエーション、例えば「カフェ・レストラン・駅など」での基本的な会話を学びます。',
                'image' => 'ciao1.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Ciao-1-%E7%AC%AC%EF%BC%93%E7%89%88-Fabio-Salvagno/dp/B0CXTL9JFS/ref=sr_1_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-2',
                'category' => 'テキスト'
            ],
            [
                'title' => 'Ciao 2',
                'description' => 'このテキストは"Ciao 1"の続編です。"Ciao 1"の終わりで触れたイタリア旅行の計画に続き、"Ciao 2"では、RenzoとLuciaという二人のキャラクターを通して、パドヴァ、フィレンツェ、ローマなどの都市を巡る旅が描かれます。彼らの友人を紹介することで、イタリア人の現代生活の一端を垣間見ることができます。<br>文法に関しては、動詞の直説法を中心に学びます。現在形・過去形・未来形の時制を学習・練習します。文法の説明と練習問題は、テキストの最終部分に含まれています',
                'image' => 'ciao2.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Ciao-2-Fabio-Salvagno/dp/B0D11QFRLX/ref=sr_1_4?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-4',
                'category' => 'テキスト'
            ],
            [
                'title' => 'イタリア語基礎文法1-2（初級）',
                'description' => '本書ではイタリア語の文章の基礎を学習するために作りました。Essere・Avere動詞と形容詞を用いた簡単な文章から、主語・動詞・目的語の基礎的な文章へのプチ「旅」です。',
                'image' => 'gramma1.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E8%AA%9E%E5%9F%BA%E7%A4%8E%E6%96%87%E6%B3%951-2%EF%BC%88%E5%88%9D%E7%B4%9A%EF%BC%89%E7%AC%AC%EF%BC%92%E7%89%88-Fabio-Salvagno/dp/B0BZF9DWK7/ref=sr_1_6?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-6',
                'category' => '問題集'
            ],
            [
                'title' => 'イタリア語基礎文法：前置詞（１）',
                'description' => '「前置詞」はイタリア語の中で一番学習しにくい文法です。「Lo zaino di Sandra または Lo zaino per Sandra」どちらが「正しい」？または「Leggo un libro sulla storia romana または Leggo un libro di storia romana.」どちらも正しい？',
                'image' => 'preposizioni.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E8%AA%9E%E5%9F%BA%E7%A4%8E%E6%96%87%E6%B3%95%EF%BC%9A%E5%89%8D%E7%BD%AE%E8%A9%9E%EF%BC%88%EF%BC%91%EF%BC%89-fabio-salvagno/dp/B0BR682L7H/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-3',
                'category' => '問題集'
            ],
            [
                'title' => 'イタリア語基礎文法：関係代名詞',
                'description' => 'I pronomi relativi（関係代名詞）の練習問題を思いついたのは2024年の夏ころでした。知り合いの英語の先生と話しているなかで、英語学習の研究の本を紹介してくれました。それはAN ERROR IN ERROR ANALYSIS by Jacquelyn Schachterの研究です。Jacquelyn Schachterの研究によると、関係代名詞の習得を避ける “回避戦略”が、作文中の誤りを表面化しづらくしているそうです。',
                'image' => 'relativi.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E8%AA%9E%E5%9F%BA%E7%A4%8E%E6%96%87%E6%B3%95%EF%BC%9A%E9%96%A2%E4%BF%82%E4%BB%A3%E5%90%8D%E8%A9%9E-fabio-salvagno/dp/B0DV5N2J1D/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-1',
                'category' => '問題集'
            ],
            [
                'title' => 'Passeggiate veneziane 1',
                'description' => 'イタリア語学習者が「イタリア語で本を読む」ことになれるようにこの「Passeggiate veneziane」を作りました。各ページの下に日本語の訳を入れました。',
                'image' => 'passeggiate1.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Passeggiate-veneziane-1-Fabio-Salvagno/dp/B0B8RC4NLY/ref=sr_1_12?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-12',
                'category' => 'プチ小説'
            ],
            [
                'title' => 'Passeggiate veneziane 2',
                'description' => 'イタリア語学習者が「イタリア語で本を読む」ことになれるようにこの「Passeggiate veneziane」を作りました。各ページの下に日本語の訳を入れました。',
                'image' => 'passeggiate2.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Passeggiate-veneziane-2-Fabio-Salvagno/dp/B0B4KFSMC1/ref=sr_1_17?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-17',
                'category' => 'プチ小説'
            ],
            [
                'title' => 'Passeggiate veneziane 3',
                'description' => 'イタリア語学習者が「イタリア語で本を読む」ことになれるようにこの「Passeggiate veneziane」を作りました。各ページの下に日本語の訳を入れました。',
                'image' => 'passeggiate3.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Passeggiate-veneziane-%E3%83%91%E3%83%83%E3%82%BB%E3%83%83%E3%82%B8%E3%83%A3%E3%83%BC%E3%83%86-%E3%83%B4%E3%82%A7%E3%83%8D%E3%83%84%E3%82%A3%E3%82%A2%E3%83%8D-Fabio-Salvagno/dp/B0B92R8MJW/ref=sr_1_10?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-10',
                'category' => 'プチ小説'
            ],
            [
                'title' => 'Passeggiate veneziane 4',
                'description' => 'イタリア語学習者が「イタリア語で本を読む」ことになれるようにこの「Passeggiate veneziane」を作りました。各ページの下に日本語の訳を入れました。',
                'image' => 'passeggiate4.jpg',
                'amazon_link' => 'https://www.amazon.co.jp/Passeggiate-veneziane-4-Fabio-Salvagno/dp/B0BW2NL8DP/ref=sr_1_11?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1I6M7NDIHH674&dib=eyJ2IjoiMSJ9.ChRc8zEyTOUILDVHwgPexihdffr1KyDn1AZpzBatUX9E_ID6j5tReEFpI2eyQag46S3qu9hbJMuJPI4VSYVrl7B5RnIzWMnoPP_-7CgGfxHNL0hZaimr7JDR7ClGQ8rVgfK1KCEhDch-nCLNLsqKmcoXsfAbleazMrKB59ZZ6MFv8FLCdUWF5WeCVLQqhnU9osD-jCZAAJfM-pPMoS9-rWC4R-fQ5WlR1F8ny6n3sE5pVkFX4ECm1vJ8CQdLfGm0A_MNJNGAoGNdwCQzFBDoyt-MeY-2c6Xctcf4ZVFqMKml_FT_nbUtcLFM2Jbd9saek_QMDydezsak6hS0aB5UajDmGJE6tifw15k1F3vfOeo.YBO2_taJiV0d5jGvlrPfziwbQqVRGro5yPlCai_38rw&dib_tag=se&keywords=fabio+salvagno&qid=1742047792&sprefix=fabio+salvagno%2Caps%2C213&sr=8-11',
                'category' => 'プチ小説'
            ]
        ]);
    }
}
