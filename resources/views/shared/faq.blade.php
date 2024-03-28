<section>
    <div class="faq">
        <div class="wrapper">
            <h4 class="title font-corp-round">
                <span>FAQ</span>
                <span>よくあるご質問</span>
            </h4>
            <ul>
                <li>
                    <a class="q font-meiryo" href="#">Q.応募確認メールが届きません</a>
                    <div class="a font-meiryo">
                        <span>A.</span>
                        docomo、au、softbankなど各キャリアのセキュリティ設定のためユーザー受信拒否と認識されているか、お客様が迷惑メール対策等で、ドメイン指定受信を設定されている場合に、メールが正しく届かないことがございます。<br>
                        「@hokepon-cp.com」のドメインを受信できるように設定をお願いいたします。
                    </div>
                </li>
                <li>
                    <a class="q font-meiryo" href="#">Q.全員プレゼントはいつ届きますか</a>
                    <div class="a font-meiryo">
                        <span>A.</span>
                        お申し込み日より90日以内を目途に、ご入力いただいたご住所にプレゼントをお届けいたします。
                    </div>
                </li>
                <li>
                    <a class="q font-meiryo" href="#">Q.一人あたりプレゼントは何回申込ますか</a>
                    <div class="a font-meiryo">
                        <span>A.</span>
                        妊娠中のプレママ向け、育児中のママ向けプレゼントはお一人様それぞれ1回限りお申し込み可能です。二重申し込みされた場合、プレゼント対象外となりますので、予めご了承ください。
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


@push('script')

<script>

$(function($) {

    $('.faq .q').on('click', function(ev) {
        ev.preventDefault();
        $(this).next().toggleClass('show');
    });

});

</script>

@endpush