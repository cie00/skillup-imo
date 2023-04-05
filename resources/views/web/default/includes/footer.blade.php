@php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
@endphp

<footer class="footer bg-secondary position-relative user-select-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" footer-subscribe d-block d-md-flex align-items-center justify-content-between">
                    <div class="flex-grow-1">
                        <strong>{{ trans('footer.join_us_today') }}</strong>
                        <span class="d-block mt-5 text-white">{{ trans('footer.subscribe_content') }}</span>
                        
                    </div>
                    <div class="subscribe-input bg-white p-10 flex-grow-1 mt-30 mt-md-0">
                        <form action="/newsletters" method="post">
                            {{ csrf_field() }}

                            <div class="form-group d-flex align-items-center m-0">
                                <div class="w-100">
                                    <input type="text" name="newsletter_email" class="form-control border-0 @error('newsletter_email') is-invalid @enderror" placeholder="{{ trans('footer.enter_email_here') }}"/>
                                    @error('newsletter_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill">{{ trans('footer.join') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $columns = ['first_column','second_column','third_column','forth_column'];
    @endphp

<style>
    .custom.header{
        font-size:1.3em;
        font-weight:700;
    }
    .line-height-2{
        line-height:2em;
    }
    .footer-img-main{
        background-image:url('../assets/default/img/footer-img.jpeg');
        background-size:cover;
        width:100%;
        height:12em;
        background-position:center top;
        border-radius:.9em;
        background-repeat:no-repeat;
        cursor:pointer;
    }
    .footer-list li{
        cursor:pointer;
    }
    .footer-list li:hover{
        padding-left:1.5em;
        border-left:.3em solid #fff;
        color:#5f7ea8;
        transition:all 400ms ease-in-out;
    }
</style>
    <div class="container">
        <div class="row">
            <div class=" col-lg-3 col-md-3">
                <div class="custom header d-block text-white font-weight-bold">
                    About Us
                </div>
                <div class="mt-20 text-white">
                    Skillup Imo is specially designed to equip Imolites, particularly the youths with viable 21st Century Skills in high demand for employment and self-enterprises. 
                </div>
            </div>
            <div class=" col-lg-3 col-md-3">
                <div class="custom header d-block text-white font-weight-bold">
                    Quick Link
                </div>
                <div class="mt-20 line-height-2 text-white">
                   <ul class="footer-list">
                       <li>Register</li>
                       <li>Login</li>
                       <li>Contact Us</li>
                       <li>Blog</li>
                   </ul>
                </div>
            </div>
            <div class="col-lg-6">
                
                    <div class="footer-img-main" onclick="location.href='https://skillupimo.org.ng/certificate_validation'"></div>
                
            </div>
            <!--@foreach($columns as $column)-->
            <!--    <div class=" col-lg-3 col-md-3">-->
            <!--        @if(!empty($footerColumns[$column]))-->
            <!--            @if(!empty($footerColumns[$column]['title']))-->
            <!--                <span class="header d-block text-white font-weight-bold">{{ $footerColumns[$column]['title'] }}</span>-->
            <!--            @endif-->

            <!--            @if(!empty($footerColumns[$column]['value']))-->
            <!--                <div class="mt-20">-->
                                <!--{!! $footerColumns[$column]['value'] !!}-->
            <!--                </div>-->
            <!--            @endif-->
            <!--        @endif-->
            <!--    </div>-->
            <!--@endforeach-->

        </div>

        <div class="mt-40 border-blue py-25 d-flex align-items-center justify-content-between">
            <div class="footer-logo">
                <a href="/">
                    @if(!empty($generalSettings['footer_logo']))
                        <!--<img src="{{ $generalSettings['footer_logo'] }}" class="img-cover" alt="footer logo">-->
                         <!--<img src="{{ $generalSettings['logo'] }}"  height="65px" alt="site logo">-->
                         <img src="{{ asset('assets/default/img/footer-logo-skill.png')}}"  height="65px" alt="site logo">
                         
                    @endif
                </a>
            </div>
            <div class="footer-social">
                @if(!empty($socials) and count($socials))
                    @foreach($socials as $social)
                        <a href="{{ $social['link'] }}">
                            <img src="{{ $social['image'] }}" alt="{{ $social['title'] }}" class="mr-15">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</footer>
