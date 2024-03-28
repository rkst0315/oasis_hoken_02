@extends('layouts.app')

@section('title', 'よくあるご質問｜子育て応援キャンペーン')

@section('content')
    <section class="under-top">
        <div class="under-mv">
            <img src="/img/mv-under.png" srcset="/img/mv-under.png 1x, /img/mv-under@2x.png 2x" alt="子育て応援キャンペーン">
        </div>
        <div class="campaign-about">
            <div class="campaign-about-bg">
                <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
                <p class="current">
                    <a href="{{url('/')}}">TOP</a> ＞ よくあるご質問
                </p>
            </div>
        </div>
    </section>

    <div class="under-wrapper">
        <section>
            <div class="under-title">
                <img src="/img/icon-faq.png" srcset="/img/icon-faq.png 1x, /img/icon-faq@2x.png 2x" alt="">
                <h1>よくあるご質問</h1>
            </div>

            <div class="accordion">
                <div class="accordion-container">
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>子育て応援キャンペーンとは？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>プレママ・新ママが今後必要とする商品をできるだけお試し頂けるよう、多数の企業協力で運営されている、プレママ・新ママ限定の無料プレゼント提供サイトです。</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>なぜ、無償でプレゼントがもらえるのですか？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>協賛企業様より、商品を無償提供頂いているからです。子育てを応援したいと思っている企業に集まって頂いています。
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>何度でもプレゼント申込（キャンペーンの利用）してもいいのでしょうか？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>プレゼントお申込みは、原則おひとり様一回とさせて頂いております。皆さまのご協力宜しくお願い致します。 </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>プレゼントはいつ発送されるのですか？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>発送は、お申込み月から１か月後を予定しております。</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>登録情報を間違えた、引越し等で住所が変わる場合どうすれば良いでしょうか？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>子育て応援キャンペーン事務局までご連絡ください。<br>
                                <a href="mailto:contact@puremam-cp.jp" class="link">contact@puremam-cp.jp</a></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>登録された個人情報の利用、削除に関して
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>個人情報の取扱い、利用、保管期間に関しては、<a href="/privacy-policy/" class="link">こちら</a>をご覧ください。</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-title js-accordion-title">
                            <span>Q.</span>個人情報は協賛企業にも伝わるのですか？
                        </h2>
                        <div class="accordion-content">
                            <p><span>A.</span>カタログ、ＤＭやクーポンなどの郵送、電話でのご案内等の営業活動に活用する為、協賛企業の一部に情報の開示をさせて頂きます。</p>
                        </div>
                    </div>

                </div>
                <div class="faq-contact">
                    <p style="font-weight: bold">上記以外についてのお問い合わせ連絡先</p>
                    <p>子育て応援キャンペーン事務局<br>
                        <a href="mailto:contact@puremam-cp.jp">contact@puremam-cp.jp</a><br>
                        営業時間：10:00~19:00（土日祝を除く）
                    </p>
                    <p>※「contact@puremam-cp.jp」からのメールを
                    受信できるよう設定をお願いします
                        </p>
                </div>

            </div>
        </section>
    </div>
@endsection



@push('script')
    <script>
        $(function() {
            // タイトルをクリックすると
            $(".js-accordion-title").on("click", function() {
                // クリックした次の要素を開閉
                $(this).next().slideToggle(300);
                // タイトルにopenクラスを付け外しして矢印の向きを変更
                $(this).toggleClass("open", 300);
            });
        });
    </script>
@endpush
