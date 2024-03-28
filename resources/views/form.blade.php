{{-- @extends('layouts.app')

@section('content') --}}

<section>

    <div class="application">

        <div class="wrapper">

            <form action="/form/confirm" method="post" class="top-form h-adr" id="top-form">
                @csrf
                <table>
                    <tr>
                        <th>
                            <div>
                                <p>お名前</p>
                            </div>
                        </th>
                        <td>
                            <ul class="name">
                                <li><input class="{{ $errors->has('name_sei') ? 'has-error' : null }}" type="text"
                                        name="name_sei" placeholder="姓" value="{{ old('name_sei') }}"></li>
                                <li><input class="{{ $errors->has('name_mei') ? 'has-error' : null }}" type="text"
                                        name="name_mei" placeholder="名" value="{{ old('name_mei') }}"></li>
                            </ul>
                            <div class="error-message">
                                <p>{{ $errors->first('name_sei') }}</p>
                                <p>{{ $errors->first('name_mei') }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                <p>フリガナ</p>
                            </div>
                        </th>
                        <td>
                            <ul class="furigana">
                                <li><input class="{{ $errors->has('name_sei_kana') ? 'has-error' : null }}"
                                        type="text" name="name_sei_kana" placeholder="セイ"
                                        value="{{ old('name_sei_kana') }}"></li>
                                <li><input class="{{ $errors->has('name_mei_kana') ? 'has-error' : null }}"
                                        type="text" name="name_mei_kana" placeholder="メイ"
                                        value="{{ old('name_mei_kana') }}"></li>
                            </ul>
                            <div class="error-message">
                                <p>{{ $errors->first('name_sei_kana') }}</p>
                                <p>{{ $errors->first('name_mei_kana') }}</p>
                            </div>
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                            <div>
                                <p>生年月日</p>
                            </div>
                        </th>
                        <td>
                            <div class="birthday">
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_year') ? 'has-error' : null }}"
                                        name="birthday_year" onchange="changeColor(this)">
                                        <option value="" selected>年</option>
                                        @for ($year = date('Y'); $year >= 1900; $year--)
                                            <option value="{{ $year }}"
                                                {{ old('birthday_year') == $year ? 'selected' : '' }}>
                                                {{ $year }}年
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_month') ? 'has-error' : null }}"
                                        name="birthday_month" onchange="changeColor(this)">
                                        <option value="" selected>月</option>
                                        @for ($month = 1; $month <= 12; $month++)
                                            <option value="{{ $month }}"
                                                {{ old('birthday_month') == $month ? 'selected' : '' }}>
                                                {{ $month }}月</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_day') ? 'has-error' : null }}"
                                        name="birthday_day" onchange="changeColor(this)">
                                        <option value="" selected>日</option>
                                        @for ($day = 1; $day <= 31; $day++)
                                            <option value="{{ $day }}"
                                                {{ old('birthday_day') == $day ? 'selected' : '' }}>
                                                {{ $day }}日
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="error-message">
                                <p>{{ $errors->first('birthday_year') }}</p>
                                <p>{{ $errors->first('birthday_month') }}</p>
                                <p>{{ $errors->first('birthday_day') }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                <p>住所</p>
                            </div>
                        </th>
                        <td>
                            <ul class="zipcode_pref">
                                <li>
                                    <div class="zipcode">
                                        <span class="p-country-name" style="display:none;">Japan</span>
                                        <input class="{{ $errors->has('zipcode_1') ? 'has-error' : null }} p-postal-code"
                                            type="text" name="zipcode_1" placeholder="郵便番号"
                                            value="{{ old('zipcode_1') }}">
                                    </div>
                                    <div class="error-message">
                                        <p>{{ $errors->first('zipcode_1') }}</p>
                                    </div>
                                </li>
                                <li>
                                    {{-- <div class="pref">
                                        <div class="select-box">
                                            <select class="{{ $errors->has('pref') ? 'has-error' : null }}"
                                                name="pref" onchange="changeColor(this)">
                                                <option value="" selected>都道府県</option>
                                                @foreach (config('constant.prefs') as $pref)
                                                    <option value="{{ $pref }}"
                                                        {{ old('pref') == $pref ? 'selected' : null }}>
                                                        {{ $pref }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="pref">
                                        <input class="p-region {{ $errors->has('pref') ? 'has-error' : null }} p-region"
                                            type="text" name="pref" value="{{ old('pref') }}"
                                            placeholder="都道府県" style="width:100%;">
                                    </div>
                                    <div class="error-message">
                                        <p>{{ $errors->first('pref') }}</p>
                                    </div>
                                </li>
                            </ul>

                            <p class="form_caution form_caution_adress">例：1112222（ハイフン不要）</p>

                            <ul>
                                <li>
                                    <div class="address_1">
                                        <input class="{{ $errors->has('address_1') ? 'has-error' : null }} p-locality p-street-address"
                                            type="text" name="address_1" value="{{ old('address_1') }}"
                                            placeholder="市区町村">
                                    </div>
                                    <div class="error-message">
                                        <p>{{ $errors->first('address_1') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="address_2">
                                        <input class="{{ $errors->has('address_2') ? 'has-error' : null }}"
                                            type="text" name="address_2" value="{{ old('address_2') }}"
                                            placeholder="番地">
                                    </div>
                                    <div class="error-message">
                                        <p>{{ $errors->first('address_2') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="address_3">
                                        <input class="{{ $errors->has('address_3') ? 'has-error' : null }}"
                                            type="text" name="address_3" value="{{ old('address_3') }}"
                                            placeholder="建物名">
                                    </div>
                                    <div class="error-message">
                                        <p>{{ $errors->first('address_3') }}</p>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <div>
                                <p>電話番号<span class="form_caution">（ハイフン不要）</span></p>
                            </div>
                        </th>
                        <td>
                            <div class="tel">
                                <input class="{{ $errors->has('tel_1') ? 'has-error' : null }}" type="text"
                                    name="tel_1" value="{{ old('tel_1') }}">
                            </div>
                            <div class="error-message">
                                <p>{{ $errors->first('tel_1') }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                <p>メールアドレス</p>
                            </div>
                        </th>
                        <td>
                            <div class="email">
                                <input class="{{ $errors->has('email') ? 'has-error' : null }}" type="text"
                                    name="email" value="{{ old('email', request()->input('email')) }}">
                            </div>
                            <div class="error-message">
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <th>
                            <div>
                                <p>
                                    ご出産予定日
                                </p>
                            </div>
                        </th>
                        <td>
                            <div class="birthday_child">
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_child_year') ? 'has-error' : null }}"
                                        name="birthday_child_year" onchange="changeColor(this)">
                                        <option value="" selected>年</option>
                                        @for ($year = 2024; $year <= 2026; $year++)
                                            <option value="{{ $year }}"
                                                {{ old('birthday_child_year') == $year ? 'selected' : '' }}>
                                                {{ $year }}年
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_child_month') ? 'has-error' : null }}"
                                        name="birthday_child_month" onchange="changeColor(this)">
                                        <option value="" selected>月</option>
                                        @for ($month = 1; $month <= 12; $month++)
                                            <option value="{{ $month }}"
                                                {{ old('birthday_child_month') == $month ? 'selected' : '' }}>
                                                {{ $month }}月</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="{{ $errors->has('birthday_child_day') ? 'has-error' : null }}"
                                        name="birthday_child_day" onchange="changeColor(this)">
                                        <option value="" selected>日</option>
                                        @for ($day = 1; $day <= 31; $day++)
                                            <option value="{{ $day }}"
                                                {{ old('birthday_child_day') == $day ? 'selected' : '' }}>
                                                {{ $day }}日
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="error-message">
                                <p>{{ $errors->first('birthday_child_year') }}</p>
                                <p>{{ $errors->first('birthday_child_month') }}</p>
                                <p>{{ $errors->first('birthday_child_day') }}</p>
                            </div>
                        </td>
                    </tr>

                </table>


                <div class="privacy-policy">
                    <p>以下の応募規約・注意事項を必ずご確認いただき、ご同意いただける場合は「同意する」にチェックを入れて「確認画面へ」ボタンからお進みください。</p>
                    <div id="privacyPolicy" class="privacy-policy-box">
                        <p>応募規約</p>
                        株式会社OASISが主催する（以下、「弊社」といいます。）「子育て応援キャンペーン」（以下、「本キャンペーン」といいます。）に応募の方（以下、「応募者」といいます。）は、以下の事項をよくお読みいただき、同意の上、応募してください。本キャンペーンに応募された場合には、本規約に同意したものとみなします。
                        なお、本キャンペーンに応募される場合は、本規約のご同意が必要となります。<br><br>

                        本キャンペーンに応募された場合には、個人情報規約に同意したものとみなします。	
                        なお、本キャンペーンに応募される場合は、本規約のご同意が必要となります。<br><br>

                        ●ご応募は一家族様1回とさせていただきます。 <br>
                        ●お申込みいただいたプレゼントの色・デザインの変更は承ることができません。 <br>
                        ●発送は、お申込み月から１か月後を予定しております。 <br>
                        ●本キャンペーンの内容・期間その他の事項の一部または全てを事前に通知することなく変更・中止・終了することがあります。<br>
                        なお、変更・中断あるいは中止または終了により生じた損害については、弊社は一切責任を負いません。<br>
                        ●応募者は、本キャンペーンの個人情報の取り扱い（https://puremam-cp.jp/privacy-policy）に従うものとします。<br><br>

                        注意事項<br>
                        ●本キャンペーンの応募時に発生する接続料や通信料は応募者のご負担となります。<br>
                        ●ご応募に関する必要事項に記入漏れや虚偽の記載があった場合、一家族様、もしくは同一のご住所で複数のご応募があった場合、そのご応募は無効になります。

                        子育て応援キャンペーン応募規約・プライバシーポリシーに同意の上、ご応募ください。<br><br>

                    </div>
                    <div id="privacyCheck" class="check-disabled button">
                        <label>
                            <input type="checkbox" name="privacy" value="同意する">
                            同意する
                        </label>

                    </div>
                    <div class="error-message privacy-error-message">
                        <p>{{ $errors->first('privacy') }}</p>
                    </div>
                </div>

                <div class="button">
                    <button class="font-corp-round" type="submit" id="submitButton">
                        確認画面へ
                    </button>
                </div>
            </form>
        </div>
    </div>

</section>


@push('script')
    <script>
        
        // セレクトタグの最初の色
        function changeColor(selectColor) {
            if (selectColor.value == 0) {
                selectColor.style.color = '';
            } else {
                selectColor.style.color = '#000';
            }
        }

        @if ($errors->any())
            // バリデーションエラーがある場合、フォームの先頭までスクロールする
            document.getElementById('top-form').scrollIntoView();
        @endif

    </script>
@endpush
