<section>
    <div class="pagination">
        <ul>
            <li class="@if ( request()->is('present') ) active @endif">
                <span>STEP1</span>
                <p>プレゼントを選ぶ</p>
            </li>
            <li class="@if ( request()->is('form') ) active @endif">
                <span>STEP2</span>
                <p>応募フォーム</p>
            </li>
            <li class="@if ( request()->is('form/confirm') ) active @endif">
                <span>STEP3</span>
                <p>応募内容を確認</p>
            </li>
        </ul>
    </div>
</section>