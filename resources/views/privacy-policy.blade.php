@extends('layouts.app')

@section('title', '個人情報の取り扱いについて｜子育て応援キャンペーン')

@section('content')
    <section class="under-top">
        <div class="under-mv">
            <img src="/img/mv-under.png" srcset="/img/mv-under.png 1x, /img/mv-under@2x.png 2x" alt="子育て応援キャンペーン">
        </div>
        <div class="campaign-about">
            <div class="campaign-about-bg">
                <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
                <p class="current">
                    <a href="{{ url('/') }}">TOP</a> ＞ 個人情報の取り扱いについて
                </p>
            </div>
        </div>
    </section>

    <div class="under-wrapper">
        <section class="privacy-policy">
            <div class="under-title">
                <img src="/img/icon-policy.png" srcset="/img/icon-policy.png 1x, /img/icon-policy@2x.png 2x" alt="">
                <h1>個人情報の取り扱いについて</h1>
            </div>

            <div class="privacy-policy-contents">
                <p class="privacy-policy-text">今回登録頂く個人情報の取扱いは以下の通りとなります。
                </p>

                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        個人情報とは
                    </h2>
                    <p>氏名、住所、電話番号、生年月日、性別、メールアドレス、出産予定日、お子様情報など、子育て応援キャンペーンでプレゼントお申込み時にご提供頂く各項目のうち、単体項目または複数項目より個人を識別できることが可能な情報群を指します。
                    </p>
                </div>
                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        個人情報の利用目的
                    </h2>
                    <p>利用方法としては、以下の３つに限ります。
                        <ol style="margin-top: 15px">
                            <li>子育て応援キャンペーンに掲載されたプレゼントの発送<p>―プレゼントの発送は子育て応援キャンペーン事務局（以下 当社）からの発送のみとなります。</p></li>
                            <li>カタログ、ＤＭやクーポンなどの郵送、電話でのご案内等 の営業活動<p>―子育て応援キャンペーンから、この活動を行う事予定はございませんので、プレゼント提供会社からのものとなります。</p></li>
                            <li>育児サービスに関するアンケート依頼などのマーケティング活動</li>
                        </ol>
                    </p>
                </div>
               
                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        個人情報の開示・提供について
                    </h2>
                    <ol>
                        <li style="margin-bottom: 15px">プレゼント提供会社への開示<br>
                            当サイトに掲載されたプレゼント提供会社との間で、個人情報の取扱いに関する契約の締結をし、上記記載の利用目的に限り活用できる制限を設けております。
                            <ul class="indent">
                                <li>＊個人情報を開示・提供するプレゼント提供会社とは、ご利用者様が応募申込みをされた子育て応援キャンペーンのプレゼント提供会社に限ります。</li>
                                <li>＊情報の受渡しの手段は、暗号通信にて特定パスワードで保護された電磁記録媒体を送信し、事前限定登録先にしか送れない外部通信サービスを利用し、誤送・流出防止を図っています。</li>
                                <li>＊上記より提供された個人情報は、プレゼント提供各社の個人情報保護指針のもと、厳重に管理されます。</li>
                            </ul>
                        </li>
                        <li>法令に基づく開示があった場合
                            <ul class="indent">
                                <li>＊人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。（例えば、商品回収（リコール）の要請があった場合において、当該商品等にかかるお客さまの連絡先等の情報を当該製造メーカー等に提供する場合）</li>
                                <li>＊国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき。</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                
                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        事業の譲渡・合併等が生じた場合の<br class="sp-only">
                        個人情報取り扱いについて
                    </h2>
                    <p>企業として、合併や資産の売却または買収をする場合が生じる場合、利用目的の範囲内でお客さまの個人情報が提供されることがあります。<br>
                    その場合、提供先に対してお客さまの個人情報取扱に関する管理義務を含む契約を締結するなど必要な措置を講じます。
                    </p>
                </div>
                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        個人情報の訂正、利用停止について
                    </h2>
                    <p>お客様より訂正、利用停止の申し出があった場合には、ご本人様であることを、下記3点の情報で確認をさせて頂いた上で、すみやかに対応致します。
                        <ul class="indent">
                            <li>＊弊社管理の個人情報削除の場合：<br>
                                弊社にメールにてご連絡お願い致します。</li>
                        </ul>
                        <ul class="indent" style="margin: 20px 0;">
                            <li>・申込者氏名</li>
                            <li>・申込者電話番号</li>
                            <li>・登録された住所</li>
                        </ul>
                    </p>
                    <p>
                        子育て応援キャンペーン　事務局　にご連絡下さい。<br>
                        メール：contact@puremam-cp.jp<br>
                    </p>
                </div>
                <div class="privacy-policy-item">
                    <h2 class="privacy-policy-h2">
                        管轄裁判所について
                    </h2>
                    <p>当社の個人情報の保護に関して紛議が生じた場合は、東京地方裁判所を第一審の管轄裁判所といたします。<br>
                    以上の個人情報取扱いに同意頂き、お申込み下さいますようお願い致します。
                    </p>
                </div>
            </div>

            <p>制定 2024年3月31日</p>
        </section>
    </div>
@endsection
