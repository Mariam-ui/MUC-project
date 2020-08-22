@extends('layouts.app')

@section('header')
    @parent

    <header>
        <div class="my-container">
            <input type="hidden" id="local" value="{{app()->getLocale()}}">
            <div class="header-menu">
                <a href="{{ url('/') }}" class="logo">
                    <img src="images/logo.svg" alt="Logo">
                </a>
                <div class="menu-tigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="menu">
                    <ul class="menu-list main-menu-list">
                        <li><a href="#search">@lang('home.2.title')</a></li>
                        <li><a href="#observation">@lang('home.3.title')</a></li>
                        <li><a href="#compromat">@lang('home.4.title')</a></li>
                    </ul>
                    <div>
                        <span class="tel"> @lang('home.7.tel') </span>
                        <ul class="sl-nav">
                            <li class="sel-leng">
                                @if(app()->getLocale() === 'ru')
                                    Rus
                                    <i class="sl-flag flag-rus"></i>
                                @elseif(app()->getLocale() === 'en')
                                    Eng
                                    <i class="sl-flag flag-eng"></i>
                                @elseif(app()->getLocale() === 'de')
                                    Ger
                                    <i class="sl-flag flag-ger"></i>
                                @elseif(app()->getLocale() === 'fr')
                                    Fr
                                    <i class="sl-flag flag-fr"></i>
                                @endif
                                <i class="arrow-icon"></i>
                                <ul class="lengs" id="lang">
                                    <li>
                                        <a href="{{ url('/ru') }}"  class="{{ app()->getLocale() == 'ru' ? 'active' :''}}">
                                            <span>Russian</span><i class="sl-flag flag-rus"><div id="rus"></div></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/en') }}" class="{{ app()->getLocale() == 'en' ? 'active' :''}}">
                                        <span>English</span><i class="sl-flag flag-eng"><div id="eng"></div></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/de') }}" class="{{ app()->getLocale() == 'de' ? 'active' :''}}">
                                            <span>German</span><i class="sl-flag flag-ger"><div id="ger"></div></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/fr') }}" class="{{ app()->getLocale() == 'fr' ? 'active' :''}}">
                                            <span>French</span><i class="sl-flag flag-fr"><div id="fr"></div></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="top-content">
        <div class="my-container">

            {{--fix this succes message part--}}
            {{--@if(session()->has('message'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session()->get('message') }}--}}
                {{--</div>--}}
            {{--@endif--}}
            {{-----------------------------}}
            <section class="section1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                <p class="red-title">@lang('home.1.title')</p>
                <h2>@lang('home.1.sub_title')</h2>
                <span class="half-text">@lang('home.1.text')</span>
                <a href="#sendEmail" id="sendBtnHref" class="btn-text">@lang('home.1.button')</a>
            </section>
            <section id="search" class="section2" data-aos="fade-right"  data-aos-duration="700">
                <h1 class="red-effect">@lang('home.2.title')</h1>
                <span class="half-text">@lang('home.2.text')</span>
                <div>
                    <span class="about-text">@lang('home.2.category_1')</span>
                    <span class="about-text">@lang('home.2.category_2')</span> </br>
                    <span class="about-text">@lang('home.2.category_3')</span>
                    <span class="about-text">@lang('home.2.category_4')</span>
                </div>
            </section>
            <section class="section3" data-aos="fade-left"  data-aos-duration="700" >
                <div id="observation" >
                <h1 class="red-effect">@lang('home.3.title')</h1>
                <span class="half-text">@lang('home.3.text')</span>
                    <div>
                        <span class="about-text">@lang('home.3.category_1')</span>
                        <span class="about-text">@lang('home.3.category_2')</span> </br>
                        <span class="about-text">@lang('home.3.category_3')</span>
                        <span class="about-text">@lang('home.3.category_4')</span>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div class="bottom-content">
        <section class="section4" data-aos="fade-right"  data-aos-duration="700">
            <div id="compromat">
            <div class="my-container">
                <h1 class="red-effect">@lang('home.4.title')</h1>
                <span class="half-text">@lang('home.4.text')</span>
                <div>
                    <span class="about-text">@lang('home.4.category_1')</span>
                    <span class="about-text">@lang('home.4.category_2')</span>
                </div>
            </div>
            </div>
        </section>
        <section class="section5" data-aos="fade-left"  data-aos-duration="700">
            <div class="my-container">
                <h3 class="half-text">@lang('home.5.title')</h3>
            </div>
        </section>
        <section id="sendEmail" class="section6"  data-aos="fade-down"  data-aos-duration="700">
            <div class="my-container">
                <div class="form-email">
                    <form id="sendEmailForm" action="/send-mail" method="POST" class="form-box">
                        {{ csrf_field() }}
                        <h4>@lang('home.6.title')</h4>
                        <label>@lang('home.6.name_label')</label>
                        <div class="input-group">
                            <div>
                                <input type="text" name="name" placeholder="@lang('home.6.name_placeholder')">
                                @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="@lang('home.6.email_placeholder')">
                                @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
                            </div>
                        </div>
                        <label for="message-text">@lang('home.6.message_label')</label>
                        <textarea id="message-text" name="message" rows="7"></textarea>
                        @if ($errors->has('message')) <p style="color:red;">{{ $errors->first('message') }}</p> @endif
                        <input type="submit" id="submit" class="red-btn" value="@lang('home.6.button')">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@section('footer')
    <footer>
        <div class="my-container">
            <div class="footer-menu">
                <a href="index.html" class="logo">
                    <img src="images/logo.svg" alt="Logo">
                </a>
                <nav class="menu">
                    <ul class="menu-list menu-footer-list">
                        <li><a href="#search">@lang('home.2.title')</a></li>
                        <li><a href="#observation">@lang('home.3.title')</a></li>
                        <li><a href="#compromat">@lang('home.4.title')</a></li>
                        <li><a href="#">@lang('home.7.privacy_policy')</a></li>
                    </ul>
                    <div>
                        <span>@lang('home.7.text') </span>
                    </div>
                </nav>
            </div>
        </div>
    </footer>
@endsection
