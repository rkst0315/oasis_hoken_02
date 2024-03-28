@extends('layouts.app')

@section('content')

<section>
    <div class="present">

        <br class="pc-only">
        <br class="pc-only">
        <br>

        @include('shared.pagination')
        
        <div class="wrapper">
            <form id="form" action="/form" method="get">
                
                <h4 class="title font-corp-round">
                    <span>抽選</span>でプレゼント！
                </h4>
                <p class="text">
                    どれか1つ欲しい物を選んでください
                </p>
                <ul class="single">
                    @foreach (config('constant.presents') as $key => $present)
                        <li>
                            <a href="#">
                                <div class="number">
                                    <img src="{{ $present['number'] }}" alt="">
                                </div>
                                <div class="photo">
                                    <img src="{{ $present['image'] }}" alt="">
                                </div>
                                <p>
                                    {!! $present['text'] !!}
                                </p>
                                <p class="more">VIEW MORE ></p>
                                <input type="radio" name="present" value="{{ $key }}">
                            </a>
                        </li>
                    @endforeach
                </ul>

                <input type="hidden" name="email" value="{{ request()->input('email') }}">

                <p style="text-align: center; color: #f00;">※注※ １世帯につき１お申込みとなります。</p>

                <div class="button">
                    <button class="font-corp-round" type="submit">
                        応募フォームへ進む
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

{{-- @include('shared.faq') --}}

{{-- @include('shared.about') --}}

@endsection

@push('script')

<script>

$(function($){

    $('.present ul a').on('click', function(ev) {
        ev.preventDefault();
        let radiobox = $(this).find('input');
        let checked = radiobox.prop('checked');
        let ul = $(this).closest('ul');
        ul.find('li').removeClass('selected').find('input').prop('checked', false);
        radiobox.prop('checked', !checked);
        $(this).closest('li').toggleClass('selected', !checked);
    });

    $('.present ul input').each(function(index, dom) {
        let checkbox = $(dom);
        let checked = checkbox.prop('checked');
        if ( checked ) {
            $(this).closest('li').toggleClass('selected', checked);
        }
    });

    $('#form').on('submit', function() {
        let checked = !!$('.present ul input:checked').length;
        if ( checked == false ) {
            alert('プレゼントを一つお選びください。')
            return false;
        }
    });

});

</script>

@endpush