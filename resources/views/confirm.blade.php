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

    {{-- @include('shared.pagination') --}}


    <div class="under-wrapper confirm-under-wrapper">
        <div class="confirmation-image">
            <p class="confirm-text">ご入力内容の確認</p>
            <img src="confirmation.png" srcset="/img/confirmation.png 1x, /img/confirmation@2x.png 2x" alt="">
        </div>

        <section>
            <div class="confirm">
                <div class="wrapper">

                    <div class="selected-present">
                        @php
                            $presents = config('constant.presents');
                            $presentIndex = (int) request()->input('present');
                            if (empty($presents[$presentIndex])) {
                                $presentIndex = 0;
                            }
                            $present = $presents[$presentIndex];
                        @endphp
                    </div>
                    <form action="/form/send" method="post">
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
                                        <p>生年月日</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="birthday">
                                        {{ request()->input('birthday_year') }}
                                        年
                                        {{ request()->input('birthday_month') }}
                                        月
                                        {{ request()->input('birthday_day') }}
                                        日
                                        <input type="hidden" name="birthday_year"
                                            value="{{ request()->input('birthday_year') }}">
                                        <input type="hidden" name="birthday_month"
                                            value="{{ request()->input('birthday_month') }}">
                                        <input type="hidden" name="birthday_day"
                                            value="{{ request()->input('birthday_day') }}">
                                    </div>
                                </td>
                            </tr>
                            <tr class="confirm-adress">
                                <th>
                                    <div class="confirm-field">
                                        <p>住所</p>
                                    </div>
                                </th>
                                <td style="padding-top: 10px">
                                    <div class="zipcode">
                                        {{ request()->input('zipcode_1') }}
                                        {{ request()->input('zipcode_2') }}
                                        <input type="hidden" name="zipcode_1" value="{{ request()->input('zipcode_1') }}">
                                    </div>
                                </td>
                                <td>
                                    <div class="pref">
                                        {{ request()->input('pref') }}
                                        <input type="hidden" name="pref" value="{{ request()->input('pref') }}">
                                    </div>
                                </td>
                                <td>
                                    <div class="address_2">
                                        {{ request()->input('address_2') }}
                                        <input type="hidden" name="address_2" value="{{ request()->input('address_2') }}">
                                    </div>
                                </td>
                                <td>
                                    <div class="address_1">
                                        {{ request()->input('address_1') }}
                                        <input type="hidden" name="address_1" value="{{ request()->input('address_1') }}">
                                    </div>
                                </td>
                                <td style="padding-bottom: 30px">
                                    <div class="address_3">
                                        {{ request()->input('address_3') }}
                                        <input type="hidden" name="address_3" value="{{ request()->input('address_3') }}">
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
                                        <input type="hidden" name="tel_1" value="{{ request()->input('tel_1') }}">
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
                                        <p>
                                            ご出産予定日
                                        </p>
                                    </div>
                                </th>
                                <td>
                                    <div class="birthday_child">
                                        {{ request()->input('birthday_child_year') }}
                                        年
                                        {{ request()->input('birthday_child_month') }}
                                        月
                                        {{ request()->input('birthday_child_day') }}
                                        日
                                        <input type="hidden" name="birthday_child_year"
                                            value="{{ request()->input('birthday_child_year') }}">
                                        <input type="hidden" name="birthday_child_month"
                                            value="{{ request()->input('birthday_child_month') }}">
                                        <input type="hidden" name="birthday_child_day"
                                            value="{{ request()->input('birthday_child_day') }}">
                                    </div>
                                </td>
                            </tr>
                            
                        </table>

                       
                            <input type="hidden" name="privacy" value="{{ request()->input('privacy') }}">
                        
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
