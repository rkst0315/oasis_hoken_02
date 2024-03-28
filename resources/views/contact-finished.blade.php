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

<section class="under-wrapper">

    <div class="confirmation-image">
        <p class="confirm-text">お問い合わせを受け付けました</p>
        <img src="confirmation-finish.png" srcset="/img/confirmation-finish.png 1x, /img/confirmation-finish@2x.png 2x" alt="">
    </div>

    <div class="finished">
        <div class="wrapper">
            <p class="finished-text">この度は子育て応援キャンペーンへの<br>
                お問い合わせ、誠にありがとうございます。<br>
                <br>
                
                後日担当者から連絡いたしますので、<br>
                恐れ入りますがしばらくお待ちください。
        </div>
    </div>

    <div class="back">
        <a href="{{url('/')}}">
            トップページへ戻る
        </a>
    </div>
</section>


@endsection

@push('script')
<script src="//static.smaad.net/script/tp.js"></script>
<script>
_smaad({
"cid" : "547493328",
"ec" : "広告主様ユーザー"
});
</script>
<script>
    (function(){
    var _CIDN = "cid";
    var _PLIDN = "plid";
    var _ACTN = "cid_auth_get_type";
    var _APTN = "plid_auth_get_type";
    var _PMTV = "pgsixbfjsm6g";
    var _TRKU = "https://adscloud.jp/track.php?p=" + _PMTV;
    var _cks = document.cookie.split("; ");
    var _cidv = "", _plidv = "", _actv = "", _aptv = "";
    for(var i = 0; i < _cks.length; i++){ var _ckd = _cks[i].split("="); if(_ckd[0] == "CL_" + _PMTV && _ckd[1].length > 1){ _cidv = _ckd[1]; } if(_ckd[0] == "PL_" + _PMTV && _ckd[1].length > 1){ _plidv = _ckd[1]; } if(_ckd[0] == "ACT_" + _PMTV && _ckd[1].length > 1){ _actv = _ckd[1]; } if(_ckd[0] == "APT_" + _PMTV && _ckd[1].length > 1){ _aptv = _ckd[1]; } if(_cidv && _plidv && _actv && _aptv) break; }
    if(!_cidv && localStorage.getItem("CL_" + _PMTV)){ _cidv = localStorage.getItem("CL_" + _PMTV); _actv = "ls"; }
    if(_cidv){ _TRKU += "&" + _CIDN + "=" + _cidv; }
    if(!_plidv && localStorage.getItem("PL_" + _PMTV)){ _plidv = localStorage.getItem("PL_" + _PMTV); _aptv = "ls"; }
    if(_plidv){ _TRKU += "&" + _PLIDN + "=" + _plidv; }
    if(_actv){ _TRKU += "&" + _ACTN + "=" + _actv; }
    if(_aptv){ _TRKU += "&" + _APTN + "=" + _aptv; }
    var _xhr = new XMLHttpRequest(); _xhr.open("GET", _TRKU); _xhr.send();
    }());
</script>
@endpush
