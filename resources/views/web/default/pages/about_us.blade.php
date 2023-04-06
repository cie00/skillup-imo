@extends(getTemplate().'.layouts.app')

@section('styles_top')
<style>
    .justify-content {
        text-align: justify;
    }
</style>
@endsection

@section('content')
    <section class="site-top-banner search-top-banner opacity-04 position-relative">
        <img src="{{ getPageBackgroundSettings('courses') }}" class="img-cover" alt=""/>

        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="top-search-categories-form">
                        <h1 class="text-white font-30 mb-15">{{ !empty($page) ? $page->title : "About Us" }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container mt-10 mt-md-40">
        <div class="row">
            <div class="col-6">
                <div class="post-show mt-30" style="text-align:justify;">
                    <h1>
                        Be Equipped for Industry 4.0 
                        <br /> 
                        <span style="color:#43D477">Online and Onsite</span>
                    </h1>
                    <p>
                        While one of the major problem is our society today is unemployment and poverty, particularly amongst our youths;
                    </p>
                    <p> 
                        It is interesting to know that there are almost unlimited opportunities for employment and economic empowerment for people with relevant skills and knowledge in some areas of services- most of which are relatively new, with the services of skilled persons in high demand either for employment or as a self-employed.
                    </p>
                    <p>
                        Therefore, Skillup Imo is specially designed to train and support as many Imolites as possible (particularly the youths) to leverage these opportunities to be gainfully employed or self-employed.
                    </p>
                    <!-- {!! nl2br($page->content) !!} -->
                </div>
            </div>
            <div class="col-6">
                <div class="post-show mt-30">
                    <img src="/assets/default/img/forum/group-young-african-people-hanging-out-outdoor-cafe.jpg" class="img" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-10 mt-md-40">
        <div class="row">
            <div class="col-6">
                <div class="post-show mt-30">
                    <img src="/assets/default/img/forum/medium-shot-student-studying-with-laptop.jpg" class="img" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="post-show mt-30" style="text-align:justify;">
                    <h1 style="color:#43D477"><sub>Boost your skills with a new way of learning</sub></h1>
                    <h1 style="font-size: 40px; color:#3B4048">
                        We strive to help the Imolites keep growing
                    </h1>
                    <p>
                        Our Skillup Imo provides continuous development training to Expand your career opportunities with Python, IT and Software, Marketing,  Development, photography and design.
                    </p>
                    <p>
                        <a href="{{ route('register.get') }}" class="btn btn-primary md-20 mt-15 mt-md-0">
                            Get started today
                        </a>
                    </p>
                </div>
            </div>
            
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
