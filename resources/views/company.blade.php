@extends('layouts.app')

@section('title', 'サイト運営会社｜子育て応援キャンペーン')

@section('content')
    <section class="under-top">
        <div class="under-mv">
            <img src="/img/mv-under.png" srcset="/img/mv-under.png 1x, /img/mv-under@2x.png 2x" alt="子育て応援キャンペーン">
        </div>
        <div class="campaign-about">
            <div class="campaign-about-bg">
                <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
                <p class="current">
                    <a href="{{ url('/') }}">TOP</a> ＞ サイト運営会社について
                </p>
            </div>
        </div>
    </section>

    <div class="under-wrapper">
        <section>
            <div class="under-title">
                <img src="/img/icon-company.png" srcset="/img/icon-company.png 1x, /img/icon-company@2x.png 2x"
                    alt="">
                <h1>サイト運営会社</h1>
            </div>

            <div class="company">
                <div class="company-table">
                    <dl>
                        <dt>会社名</dt>
                        <dd>株式会社OASIS</dd>
                    </dl>
                    <dl>
                        <dt>代表取締役</dt>
                        <dd>竹内　正行</dd>
                    </dl>
                    <dl>
                        <dt>所在地</dt>
                        <dd>104-0045<br>
                            東京都中央区築地3-1-10<br>
                            Shinto GINZA EAST 4階<br>
                        </dd>
                    </dl>
                    <dl>
                        <dt>電話 / FAX</dt>
                        <dd>03-6264-7677</dd>
                    </dl>
                    <dl>
                        <dt>設立年月日</dt>
                        <dd>平成25年11月1日</dd>
                    </dl>
                </div>
                <div class="company-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3092215660545!2d139.7719071770973!3d35.66938733062216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018896044298acb%3A0xddd39b46b832d310!2sShinto%20Ginza%20East!5e0!3m2!1sja!2sjp!4v1711350346684!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>
@endsection
