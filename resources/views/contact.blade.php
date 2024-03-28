@extends('layouts.app')

@section('title', 'お問い合わせ｜子育て応援キャンペーン')

@section('content')

    <section class="under-top">
        <div class="under-mv">
            <img src="/img/mv-under.png" srcset="/img/mv-under.png 1x, /img/mv-under@2x.png 2x" alt="子育て応援キャンペーン">
        </div>
        <div class="campaign-about">
            <div class="campaign-about-bg">
                <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
                <p class="current">
                    <a href="{{ url('/') }}">TOP</a> ＞ お問い合わせ
                </p>
            </div>
        </div>
    </section>

    {{-- @include('shared.pagination') --}}



    <div class="under-wrapper">
        <section class="contact">
            <div class="under-title">
                <img src="/img/icon-contact.png" srcset="/img/icon-contact.png 1x, /img/icon-contact@2x.png 2x"
                    alt="">
                <h1>お問い合わせ</h1>

            </div>

            <div class="confirmation-image">
                <img src="confirmation-first.png" srcset="/img/confirmation-first.png 1x, /img/confirmation-first@2x.png 2x"
                    alt="">
            </div>

            @include('contact-form')

        </section>
    </div>


@endsection
