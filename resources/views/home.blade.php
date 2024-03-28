@extends('layouts.app')

@section('title', '子育て応援キャンペーン')

@section('content')
    <section>
        <div class="mv">
            <div class="wrapper">
                <div class="image">
                    <img src="/img/mv.png" srcset="/img/mv.png 1x, /img/mv@2x.png 2x" alt="子育て応援キャンペーン">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="campaign-about">
            <div class="wrapper">
                <div class="campaign-about-bg">
                    <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
                </div>
                <div class="campaign-about-content campaign-inner">
                    <h2 class="campaign-h2">
                        <span class="highlight">子育て応援キャンペーンでは、
                            <div class="fukidashi-left">
                                <img src="/img/fukidashi-left.png"
                                    srcset="/img/fukidashi-left.png 1x, /img/fukidashi-left@2x.png 2x" alt="">
                            </div>
                        </span>
                    </h2>
                    <p class="font-yu-gothic-pr6n">様々な企業さまのご協力をもとに、<br>
                        妊娠・育児中のかたへ。<br><br>
                        "おめでとう"の気持ちを込めて、<br>
                        産後すぐに役立つプレゼントを無料で<br>
                        お届けしています！
                    </p>
                </div>
                <div class="campaign-about-ribbon">
                    <img src="/img/bg-ribbon.png" srcset="/img/bg-ribbon.png 1x, /img/bg-ribbon@2x.png 2x" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="campaign-company">
        <div class="slider">
            <div style="display: flex; justify-content:center;"><img src="/img/pal.hosyo.png" alt=""
                    class="pal"></div>
            <div style="display: flex; justify-content:center;"><img src="/img/palsystem.png" alt=""
                    class="pals"></div>
            <div style="display: flex; justify-content:center;"><img src="/img/AquaClara.svg" alt=""
                    class="aqua"></div>
        </div>
    </section>

    <section class="campaign-company campaign-company-02">
        <div class="slider">
            <div><img src="/img/Logo_donebydeer_rectangle.png" alt="" class="done"></div>
            <div><img src="/img/tys_kei.png" alt="" class="tys"></div>
            <div><img src="/img/hoken.minaoshi.svg" alt="" class="hoken"></div>
        </div>
    </section>

    <section>
        <div class="campaign-present">
            <div class="wrapper">
                <div>
                    <img src="/img/bg02.png" alt="">
                </div>
                <h2 class="campaign-h2">
                    <span class="highlight">プレゼント一覧
                        <div class="fukidashi-right">
                            <img src="/img/fukidashi-right.png"
                                srcset="/img/fukidashi-right.png 1x, /img/fukidashi-right@2x.png 2x" alt="">
                        </div>
                    </span>
                </h2>
                <ul>
                    <li>
                        <div class="present-title" style="margin-bottom: 0;">
                            <p>人気商品１品プレゼント</p>
                            生活協同組合パルシステム東京
                        </div>
                        <div class="present-left">
                            <img src="/img/present01.png" srcset="/img/present01.png 1x, /img/present01@2x.png 2x"
                                alt="">
                        </div>
                        <div class="present-text campaign-inner font-ryo">
                            ・写真はイメージです<br>
                            ・お届けするサンプルは写真と異なる場合があります<br>
                            ・配達エリア内にお住いの方限定です<br>
                            <div class="indent">配達エリア：東京・神奈川・千葉・埼玉・茨城・栃木・群馬<br>
                                <div>福島・山梨・長野・静岡・新潟<br>
                                    （一部配達していないエリアがあります）</div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="present-title meguru">
                            <p>me・gu・ru［めぐる］ボディソープミニ</p>
                            パルシステム共済生活協同組合連合会
                        </div>

                        <div class="present-right">
                            <img src="/img/present02.png" srcset="/img/present02.png 1x, /img/present02@2x.png 2x"
                                alt="">
                        </div>
                        <div class="present-text campaign-inner font-ryo">
                            ・福岡県はお届け地域対象外となります
                        </div>
                    </li>

                    <li>
                        <div class="present-title">
                            <p>シリコンボウル　オッゾ　グレー<br>
                                先着５０名様</p>
                            done by deer<br>
                        </div>
                        <div class="present-left">
                            <img src="/img/present03.png" srcset="/img/present03.png 1x, /img/present03@2x.png 2x"
                                alt="">
                                <div>
                                    <img src="/img/present03-text.png" srcset="/img/present03-text.png 1x, /img/present03-text@2x.png 2x" alt="">
                                </div>    
                        </div>
                        <div class="present-text campaign-inner font-ryo">
                            ・予定数量に達し次第終了とさせていただきます
                        </div>
                    </li>

                    <li>
                        <div class="present-title">
                            <p>BRUNO<br>
                                マルチスティックブレンダー<br>
                                毎月５名様</p>
                            株式会社OASIS
                        </div>
                        <div class="present-right">
                            <img src="/img/present04.png" srcset="/img/present04.png 1x, /img/present04@2x.png 2x"
                                alt="">
                                <div>
                                    <img src="/img/present04-text.png" srcset="/img/present04-text.png 1x, /img/present04-text@2x.png 2x" alt="">
                                </div> 
                        </div>
                        <div class="present-text campaign-inner font-ryo">
                            ・当選者の発表は賞品の発送をもって代えさせていただきます
                            <br><br><br>
                            ※プレゼント内容は予告なく変更する場合がございます
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="campaign-form">
            <div class="wrapper">
                <div class="bg03">
                    <img src="/img/bg03.png" srcset="/img/bg03.png 1x, /img/bg03@2x.png 2x" alt="">
                </div>
                <h2 class="campaign-h2">
                    <span class="highlight">プレゼント申し込みフォーム
                        <div class="fukidashi-left">
                            <img src="/img/fukidashi-left.png"
                                srcset="/img/fukidashi-left.png 1x, /img/fukidashi-left@2x.png 2x" alt="">
                        </div>
                    </span>
                </h2>

                @include('form')

            </div>
        </div>
    </section>
@endsection



@push('script')
    <script src="//static.smaad.net/script/lp.js" async></script>
    <!-- slick -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        (function() {
            var _CIDN = "cid";
            var _PLIDN = "gclid";
            var _PMTN = "p";
            var _LPTU = "./";
            var _param = location.search.substring(1).split("&");
            var _ulp = "",
                _ulcid = "",
                _ulplid = "";
            for (var i = 0; _param[i]; i++) {
                var kv = _param[i].split("=");
                if (kv[0] == _PMTN && kv[1].length > 1) {
                    _ulp = kv[1];
                }
                if (kv[0] == _CIDN && kv[1].length > 1) {
                    _ulcid = kv[1];
                }
                if (kv[0] == _PLIDN && kv[1].length > 1) {
                    _ulplid = kv[1];
                }
            }
            if (_ulp) {
                _LPTU += "lptag.php?p=" + _ulp;
                if (_ulcid) {
                    _LPTU += "&cid=" + _ulcid;
                    localStorage.setItem("CL_" + _ulp, _ulcid);
                }
                if (_ulplid) {
                    _LPTU += "&plid=" + _ulplid;
                    localStorage.setItem("PL_" + _ulp, _ulplid);
                }
                if (_ulcid || _ulplid) {
                    var _xhr = new XMLHttpRequest();
                    _xhr.open("GET", _LPTU);
                    _xhr.onreadystatechange = function() {
                        if (_xhr.readyState === 4 && _xhr.status !== 200) {
                            if (_ulcid) {
                                document.cookie = "CL_" + _ulp + "=" + decodeURIComponent(_ulcid) + "; expires=" +
                                    new Date(new Date().getTime() + (63072000000)).toUTCString() + "; path=/;";
                                document.cookie = "ACT_" + _ulp + "=js; expires=" + new Date(new Date().getTime() +
                                    (63072000000)).toUTCString() + "; path=/;";
                            }
                            if (_ulplid) {
                                document.cookie = "PL_" + _ulp + "=" + decodeURIComponent(_ulplid) + "; expires=" +
                                    new Date(new Date().getTime() + (63072000000)).toUTCString() + "; path=/;";
                                document.cookie = "APT_" + _ulp + "=js; expires=" + new Date(new Date().getTime() +
                                    (63072000000)).toUTCString() + "; path=/;";
                            }
                        }
                    };
                    _xhr.send();
                }
            }
        }());

        $(function() {
            $('.slider').slick({
                autoplay: true, // 自動でスクロール
                autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
                speed: 5000, // スライドが流れる速度を設定
                cssEase: "linear", // スライドの流れ方を等速に設定
                slidesToShow: 2, // 表示するスライドの数
                swipe: false, // 操作による切り替えはさせない
                arrows: false, // 矢印非表示
                pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
                pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
            });
        });
    </script>
@endpush
