<section>

    <div class="application">


        <div class="wrapper">



            <form action="/contact-form/contact-confirm" method="post">

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


                    <tr class="contact-only">
                        <th>
                            <div>
                                <p>お問い合わせ内容</p>
                            </div>
                        </th>
                        <td>
                            <div class="contact">
                                <textarea type="text" name="contact_message" placeholder=""
                                    class="{{ $errors->has('contact_message') ? 'has-error' : null }}"></textarea>
                            </div>
                            <div class="error-message">
                                <p>{{ $errors->first('contact_message') }}</p>
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

                        ●応募期間は2024年00月0日〜2024年0月00日となります。<br>
                        ●ご応募は一家族様1回とさせていただきます。<br>
                        ●お申込みいただいたプレゼントの色・デザインの変更は承ることができません。<br>
                        ●発送は、~~を予定しております。<br>
                        ●プレゼントの色・デザインは写真と異なる場合があります。<br>
                        ●本キャンペーンの内容・期間その他の事項の一部または全てを事前に通知することなく変更・中止・終了することがあります。なお、変更・中断あるいは中止または終了により生じた損害については、弊社は一切責任を負いません。<br>
                        ●応募者は、本キャンペーンのプライバシーポリシーに従うものとします。<br>
                        ●弊社が運営する他のキャンぺーンにもお申し込みいただいた場合、賞品を同送する場合がございます。<br><br>

                        注意事項<br>
                        ●本キャンペーンの応募時に発生する接続料や通信料は応募者のご負担となります。<br>
                        ●ご応募に関する必要事項に記入漏れや虚偽の記載があった場合、一家族様、もしくは同一のご住所で複数のご応募があった場合、そのご応募は無効になります。<br><br>

                        子育て応援キャンペーン応募規約・プライバシーポリシーに同意の上、ご応募ください。
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
                    <button class="font-corp-round" type="submit" id="submitButton" disabled>
                        確認画面へ
                    </button>
                </div>


            </form>
        </div>
    </div>

</section>

