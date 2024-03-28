@extends('layouts.app')

@section('content')


    <section class="under-top">
        <div class="under-mv">
            <img src="/img/mv-under.png" srcset="/img/mv-under.png 1x, /img/mv-under@2x.png 2x" alt="子育て応援キャンペーン">
        </div>
        <div class="campaign-about">
            <div class="campaign-about-bg">
                <img src="/img/bg-01.png" srcset="/img/bg-01.png 1x, /img/bg-01@2x.png 2x" alt="">
            </div>
        </div>
    </section>



    <div class="under-wrapper confirm-under-wrapper">
        <div class="confirmation-image">
            <p class="confirm-text">ご入力内容の確認</p>
            <img src="confirmation.png" srcset="/img/confirmation.png 1x, /img/confirmation@2x.png 2x" alt="">
        </div>

        <section>
            <div class="confirm">
                <div class="wrapper">
                    
                    <form action="/contact-form/contact-send" method="post">
                        @csrf
                        <table>
                            <tr>
                                <th>
                                    <div class="confirm-field">
                                        <p>お名前</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="name">
                                        {{ request()->input('name_sei') }}
                                        {{ request()->input('name_mei') }}
                                        <input type="hidden" name="name_sei" value="{{ request()->input('name_sei') }}">
                                        <input type="hidden" name="name_mei" value="{{ request()->input('name_mei') }}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="confirm-field">
                                        <p>フリガナ</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="furigana">
                                        {{ request()->input('name_sei_kana') }}
                                        {{ request()->input('name_mei_kana') }}
                                        <input type="hidden" name="name_sei_kana"
                                            value="{{ request()->input('name_sei_kana') }}">
                                        <input type="hidden" name="name_mei_kana"
                                            value="{{ request()->input('name_mei_kana') }}">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <div class="confirm-field">
                                        <p>電話番号</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="tel">
                                        {{ request()->input('tel_1') }}
                                        <input type="hidden" name="tel_1"
                                        value="{{ request()->input('tel_1') }}">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="confirm-field">
                                        <p>メールアドレス</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="email">
                                        {{ request()->input('email') }}
                                        <input type="hidden" name="email" value="{{ request()->input('email') }}">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="confirm-field">
                                        <p>お問い合わせ内容</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="contact" style="white-space: pre-wrap">{{request()->input('contact_message')}}</div>
                                    <textarea type="hidden" name="contact_message" style="display: none">{{ request()->input('contact_message') }}</textarea>
                                </td>
                            </tr>

                            <input type="hidden" name="privacy" value="同意する" value="{{ request()->input('privacy') }}">
                            
                        </table>

                        

                        <div class="button">
                            <button class="font-corp-round" type="submit">
                                申し込む
                            </button>
                        </div>
                        <div class="back">
                            <a href="#">
                                戻る
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </section>
    </div>


@endsection

@push('script')
    <script>
        $(function($) {
            $('.back a').on('click', function(ev) {
                ev.preventDefault();
                window.history.back();
            });


        });
    </script>
@endpush
