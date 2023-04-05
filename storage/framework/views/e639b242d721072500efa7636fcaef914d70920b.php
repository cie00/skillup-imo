<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(!empty($heroSectionData)): ?>

        <?php if(!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == "1"): ?>
            <?php $__env->startPush('scripts_bottom'); ?>
                <!--<script src="/assets/default/vendors/lottie/lottie-player.js"></script>-->
            <?php $__env->stopPush(); ?>
        <?php endif; ?>
        <style>
        .z-index_99{
            z-index:99;
        }
        .p_relative{
            position:relative;
        }
        .p_absolute{
            position:absolute;
        }
            .section-bg-overlay{
                top:0;
                left:0;
                right:0;
                bottom:0;
                background: rgb(4,9,33);
background: linear-gradient(264deg, rgba(4,9,33,0.927608543417367) 36%, rgba(0,16,80,0.022846638655462215) 100%);
            }
            .text-strok-white{
                -webkit-text-stroke: 1px #fff;
            }
        </style>
        <section class="slider-container p_relative  <?php echo e(($heroSection == "2") ? 'slider-hero-section2' : ''); ?>" <?php if(empty($heroSectionData['is_video_background'])): ?> style=" background-position:center left; background-image: url('<?php echo e($heroSectionData['hero_background']); ?>')" <?php endif; ?>>
        <div class="section-bg-overlay p_absolute" style="transform: scaleX(-1); -webkit-transform: scaleX(-1)"></div>
            <?php if($heroSection == "1"): ?>
                <?php if(!empty($heroSectionData['is_video_background'])): ?>
                    <video playsinline autoplay muted loop id="homeHeroVideoBackground" class="img-cover">
                        <source src="<?php echo e($heroSectionData['hero_background']); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>

                <div class="mask"></div>
            <?php endif; ?>
            <style>
               html .hero-section2 .welcome-to-cus{
                    font-size:1.5em;
                    color:#818894;
                    
                }
                .skillup-imo{
                    font-size:2.5em;
                    color:#fff;
                }
                .slider-container.slider-hero-section2 {
    padding: 40px 0 90px;
}
.justify-contents-start{
    justify-content:start;
}
.industry-4{
    font-size:2em;
    line-height:.8;
   
    
}
.text-strok-white-none{
    -webkit-text-stroke: 0;
    color:#fff;
    font-size:.7em;
    margin-bottom:2em;
}
.cus.text-strok-white-cus{
    -webkit-text-stroke: 1px #fff;
    font-size:2.4em;
    color:#fff;
}
            .font-weight-bold{
                font-weight:800;
            }
            </style>
            
            <div class="container user-select-none z-index_99">

                <?php if($heroSection == "2"): ?>
                    <div class="row slider-content align-items-center hero-section2 flex-column-reverse flex-md-row">
                        <div class="col-12 col-md-7 col-lg-8">
                            <!--<h1 class="text-secondary font-weight-bold "><?php echo e($heroSectionData['title']); ?></h1>-->
                            <!--<div class="font-weight-bold "><span class="welcome-to-cus">Welcome To </span><span class="skillup-imo ">SkillupImo</span> </div>-->
                            <div class="font-weight-semibold text-strok-white mt-20">
                                <div class="row ">
                                    <div class="col-lg-12">
                                        <span class="text-strok-white-cus cus font-weight-bold">
                                             BE EQUIPPED FOR INDUSTRY 4.0 ONLINE AND ONSITE</span> 
                                    </div>
                                </div>
                                 
                            </div>
                            <p class="slide-hint text-gray mt-40 "><?php echo nl2br($heroSectionData['description']); ?></p>

                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="/search" method="get" class="d-inline-flex mt-30 mt-lg-30 w-100">
                                <div class="form-group d-flex align-items-center m-0 slider-search p-10 bg-white w-100">
                                    <input type="text" name="search" class="form-control border-0 mr-lg-50" placeholder="<?php echo e(trans('home.slider_search_placeholder')); ?>"/>
                                    <button type="submit" class="btn btn-primary rounded-pill"><?php echo e(trans('home.find')); ?></button>
                                </div>
                            </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-5 col-lg-6">
                            <?php if(!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == "1"): ?>
                                <lottie-player src="<?php echo e($heroSectionData['hero_vector']); ?>" background="transparent" speed="1" class="w-100" loop autoplay></lottie-player>
                            <?php else: ?>
                                <img src="<?php echo e($heroSectionData['hero_vector']); ?>" alt="<?php echo e($heroSectionData['title']); ?>" class="img-cover">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="text-center slider-content">
                        <h1><?php echo e($heroSectionData['title']); ?></h1>
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-12 col-md-9 col-lg-7">
                                <p class="mt-30 slide-hint"><?php echo nl2br($heroSectionData['description']); ?></p>

                                <form action="/search" method="get" class="d-inline-flex mt-30 mt-lg-50 w-100">
                                    <div class="form-group d-flex align-items-center m-0 slider-search p-10 bg-white w-100">
                                        <input type="text" name="search" class="form-control border-0 mr-lg-50" placeholder="<?php echo e(trans('home.slider_search_placeholder')); ?>"/>
                                        <button type="submit" class="btn btn-primary rounded-pill"><?php echo e(trans('home.find')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    
    <!--Stats Block -->
    
    <style>
        .cus-marg{
            margin-top:12em;
        }
    </style>
    
    <div class="stats-container cus-marg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box teacher">
                            <img src="/assets/default/img/stats/teacher.svg" alt=""/>
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($skillfulTeachersCount); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.skillful_teachers')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.skillful_teachers_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box student">
                            <img src="/assets/default/img/stats/student.svg" alt=""/>
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($studentsCount); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.happy_students')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.happy_students_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box video">
                            <img src="/assets/default/img/stats/video.svg" alt=""/>
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($liveClassCount); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.live_classes')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.live_classes_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box course">
                            <img src="/assets/default/img/stats/course.svg" alt=""/>
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($offlineCourseCount); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.offline_courses')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.offline_courses_hint')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--End Stats Block-->
    
    <style>
    :root{
        --governor-bg-color: #EEF2F6;
        --governor-font-family: "GT Walsheim Pro", sans-serif;
    }
    
    /*Loading fonts*/
    
    @font-face {
  font-family: 'GT Walsheim Pro';
  font-weight: 100;
  src: url("../fonts/font/GT-Walsheim-Pro-Thin.woff2") format("woff2");
}

@font-face {
  font-family: 'GT Walsheim Pro';
  font-weight: 200;
  src: url("../fonts/font/GT-Walsheim-Pro-Ultra-Light.woff2") format("woff2");
}

@font-face {
  font-family: 'GT Walsheim Pro';
  font-weight: 300;
  src: url("../fonts/font/GT-Walsheim-Pro-Light.woff2") format("woff2");
}

@font-face {
  font-family: 'GT Walsheim Pro';
  font-weight: 400;
  src: url("../fonts/font/GT-Walsheim-Pro-Regular.woff2") format("woff2");
}

@font-face {
  font-family: 'GT Walsheim Pro';
  font-weight: 700;
  src: url("../fonts/font/GT-Walsheim-Pro-Bold.woff2") format("woff2");
}

    
    /*End Loading fonts*/
    
    
        .governor-block{
            margin:3em 0;
            margin-bottom:10em;
        }
         .governor-block .container{
              background-color:var(--governor-bg-color);
              border:.3em solid #116608;
              box-shadow:0 3px 30px 0 rgb(0 0 0 / 10%);
         }
        .governor-img{
            background-image:url('https://site.ng/imo-main/view/assets/images/hisexclecny.png');
            background-size:contain;
            width:100%;
            height:19em;
            background-repeat:no-repeat;
            background-position:center center;
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }
        .governor-content-section{
            font-family:var(--governor-font-family);
        }
        .governor-content-section .head-1{
            color:#116608;
            font-size:2em;
            font-weight:700;
        }
        .governor-content-section .imolites{
            font-size:1.2em;
            color:#11ad11;
        }
        .governor-content-section .description{
            margin-top:1em;
            font-size: 1em;
            line-height: 26px;
            font-weight: 400;
        }
        .governor-content-section .governor-read-more{
            margin-top:1em;
            color:#116608;
            font-size: 1.2em;
            cursor:pointer;
        }
        .governor-content-section .governor-read-more:hover{
            border-left:4px solid #11ad11;
            padding-left:1.5em;
            transition:all 300ms ease-in-out;
        }
        .governor-content-section .icon.svg:hover{
            color:#116608;
        }
        .governor-data{
            right:9.6em;
            bottom:.2em;
            z-index:99;
            padding:.6em;
        }
        .sec-1{
            font-size:1.2em;
            font-weight:700;
            color:#11AD11;
             -webkit-text-stroke: .7pt #11AD11;
             z-index:10;
        }
        .sec-2{
            color:#116608;
            z-index:10;
        }
        .governor-data-overlay{
            background-color:#fff;
            opacity:.6;
            position:absolute;
            top:0;
            right:0;
            left:0;
            bottom:0;
            z-index:-1;
        }
        .mb_60{
            margin-bottom:12em;
        }
        
        .home-sections.home-sections-swiper {
    margin-top: 50px;
}
    </style>
    
  
    
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative mb_60">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"> SPECIAL OFFER FOR IMOLITES</h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">The Government of Imo State under His Excellency, 
                        Senator Hope Uzodinma is offering scholarship for three hundred 
                        thousand (300,000) youths of Imo State to be trained under this programme.</p>

                            <div class="mt-35 d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-outline-primary ml-15">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="https://site.ng/imo-main/view/assets/images/hisexclecny.png" class="find-instructor-section-hero" 
                            alt="His Excellency">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                            <div class="example-instructor-card bg-white rounded-sm shadow-lg  p-5 p-md-15 d-flex align-items-center">
                                

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block">Governor Hope Uzodinma</span>
                                    <span class="text-gray font-12 font-weight-500">Governor of Imo State</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>







    <?php $__currentLoopData = $homeSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$featured_classes and !empty($featureWebinars) and !$featureWebinars->isEmpty()): ?>
            <section class="home-sections container mt-0 ">
                <div class="px-20 px-md-0">
                    <h2 class="section-title"><?php echo e(trans('home.featured_classes')); ?></h2>
                    <p class="section-hint"><?php echo e(trans('home.featured_classes_hint')); ?></p>
                </div>

                <div class="feature-slider-container position-relative d-flex justify-content-center mt-10">
                    <div class="swiper-container features-swiper-container pb-25">
                        <div class="swiper-wrapper py-10">
                            <?php $__currentLoopData = $featureWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">

                                    <a href="<?php echo e($feature->webinar->getUrl()); ?>">
                                        <div class="feature-slider d-flex h-100" style="background-image: url('<?php echo e($feature->webinar->getImage()); ?>')">
                                            <div class="mask"></div>
                                            <div class="p-5 p-md-25 feature-slider-card">
                                                <div class="d-flex flex-column feature-slider-body position-relative h-100">
                                                    <?php if($feature->webinar->bestTicket() < $feature->webinar->price): ?>
                                                        <span class="badge badge-danger mb-2 "><?php echo e(trans('public.offer',['off' => $feature->webinar->bestTicket(true)['percent']])); ?></span>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e($feature->webinar->getUrl()); ?>">
                                                        <h3 class="card-title mt-1"><?php echo e($feature->webinar->title); ?></h3>
                                                    </a>

                                                    <div class="user-inline-avatar mt-15 d-flex align-items-center">
                                                        <div class="avatar bg-gray200">
                                                            <img src="<?php echo e($feature->webinar->teacher->getAvatar()); ?>" class="img-cover" alt="<?php echo e($feature->webinar->teacher->full_naem); ?>">
                                                        </div>
                                                        <a href="<?php echo e($feature->webinar->teacher->getProfileUrl()); ?>" target="_blank" class="user-name font-14 ml-5"><?php echo e($feature->webinar->teacher->full_name); ?></a>
                                                    </div>

                                                    <p class="mt-25 feature-desc text-gray"><?php echo e($feature->description); ?></p>

                                                    <?php echo $__env->make('web.default.includes.webinar.rate',['rate' => $feature->webinar->getRate()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                    <div class="feature-footer mt-auto d-flex align-items-center justify-content-between">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" width="20" height="20" class="webinar-icon"></i>
                                                                <span class="duration ml-5 text-dark-blue font-14"><?php echo e(convertMinutesToHourAndMinute($feature->webinar->duration)); ?> <?php echo e(trans('home.hours')); ?></span>
                                                            </div>

                                                            <div class="vertical-line mx-10"></div>

                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="calendar" width="20" height="20" class="webinar-icon"></i>
                                                                <span class="date-published ml-5 text-dark-blue font-14"><?php echo e(dateTimeFormat(!empty($feature->webinar->start_date) ? $feature->webinar->start_date : $feature->webinar->created_at,'j M Y')); ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="feature-price-box">
                                                            <?php if(!empty($feature->webinar->price ) and $feature->webinar->price > 0): ?>
                                                                <?php if($feature->webinar->bestTicket() < $feature->webinar->price): ?>
                                                                    <span class="real"><?php echo e(handlePrice($feature->webinar->bestTicket())); ?></span>
                                                                <?php else: ?>
                                                                    <?php echo e(handlePrice($feature->webinar->price)); ?>

                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php echo e(trans('public.free')); ?>

                                                            <?php endif; ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="swiper-pagination features-swiper-pagination"></div>
                </div>
            </section>
        <?php endif; ?>
        


                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

        <?php if($homeSection->name == \App\Models\HomeSection::$latest_bundles and !empty($latestBundles) and !$latestBundles->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('update.latest_bundles')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('update.latest_bundles_hint')); ?></p>
                    </div>

                    <a href="/classes?type[]=bundle" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-bundle-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $latestBundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestBundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $latestBundle], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination bundle-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$latest_classes and !empty($latestWebinars) and !$latestWebinars->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.latest_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.latest_webinars_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=newest" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $latestWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $latestWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination latest-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$best_rates and !empty($bestRateWebinars) and !$bestRateWebinars->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.best_rates')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.best_rates_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=best_rates" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-rates-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $bestRateWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestRateWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $bestRateWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-rates-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$trend_categories and !empty($trendCategories) and !$trendCategories->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <h2 class="section-title"><?php echo e(trans('home.trending_categories')); ?></h2>
                <p class="section-hint"><?php echo e(trans('home.trending_categories_hint')); ?></p>

                <div class="row mt-40">

                    <?php $__currentLoopData = $trendCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-3 col-lg-2 mt-20 mt-md-0">
                            <a href="<?php echo e($trend->category->getUrl()); ?>">
                                <div class="trending-card d-flex flex-column align-items-center w-100">
                                    <div class="trending-image d-flex align-items-center justify-content-center w-100" style="background-color: <?php echo e($trend->color); ?>">
                                        <div class="icon mb-3">
                                            <img src="<?php echo e($trend->getIcon()); ?>" width="10" class="img-cover" alt="<?php echo e($trend->category->title); ?>">
                                        </div>
                                    </div>

                                    <div class="item-count px-10 px-lg-20 py-5 py-lg-10"><?php echo e($trend->category->webinars_count); ?> <?php echo e(trans('product.course')); ?></div>

                                    <h3><?php echo e($trend->category->title); ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
        <?php endif; ?>

        
        <?php if($homeSection->name == \App\Models\HomeSection::$full_advertising_banner and !empty($advertisingBanners1) and count($advertisingBanners1)): ?>
            <div class="home-sections container">
                <div class="row">
                    <?php $__currentLoopData = $advertisingBanners1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-<?php echo e($banner1->size); ?>">
                            <a href="<?php echo e($banner1->link); ?>">
                                <img src="<?php echo e($banner1->image); ?>" class="img-cover rounded-sm" alt="<?php echo e($banner1->title); ?>">
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
        

        <?php if($homeSection->name == \App\Models\HomeSection::$best_sellers and !empty($bestSaleWebinars) and !$bestSaleWebinars->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.best_sellers')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.best_sellers_hint')); ?></p>
                    </div>

                    <a href="/classes?sort=bestsellers" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-sales-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $bestSaleWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestSaleWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $bestSaleWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-sales-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$discount_classes and !empty($hasDiscountWebinars) and !$hasDiscountWebinars->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.discount_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.discount_classes_hint')); ?></p>
                    </div>

                    <a href="/classes?discount=on" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container has-discount-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            <?php $__currentLoopData = $hasDiscountWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasDiscountWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $hasDiscountWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination has-discount-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$free_classes and !empty($freeWebinars) and !$freeWebinars->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.free_classes')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.free_classes_hint')); ?></p>
                    </div>

                    <a href="/classes?free=on" class="btn btn-border-white"><?php echo e(trans('home.view_all')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container free-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $freeWebinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freeWebinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.includes.webinar.grid-card',['webinar' => $freeWebinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination free-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$store_products and !empty($newProducts) and !$newProducts->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('update.store_products')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('update.store_products_hint')); ?></p>
                    </div>

                    <a href="/products" class="btn btn-border-white"><?php echo e(trans('update.all_products')); ?></a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container new-products-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <?php echo $__env->make('web.default.products.includes.card',['product' => $newProduct], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination new-products-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$testimonials and !empty($testimonials) and !$testimonials->isEmpty()): ?>
            <div class="position-relative testimonials-container">

                <div id="parallax1" class="ltr">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title"><?php echo e(trans('home.testimonials')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.testimonials_hint')); ?></p>
                    </div>

                    <div class="position-relative">
                        <div class="swiper-container testimonials-swiper px-12">
                            <div class="swiper-wrapper">

                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <div class="testimonials-card position-relative py-15 py-lg-30 px-10 px-lg-20 rounded-sm shadow bg-white text-center">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="testimonials-user-avatar">
                                                    <img src="<?php echo e($testimonial->user_avatar); ?>" alt="<?php echo e($testimonial->user_name); ?>" class="img-cover rounded-circle">
                                                </div>
                                                <h4 class="font-16 font-weight-bold text-secondary mt-30"><?php echo e($testimonial->user_name); ?></h4>
                                                <span class="d-block font-14 text-gray"><?php echo e($testimonial->user_bio); ?></span>
                                                <?php echo $__env->make('web.default.includes.webinar.rate',['rate' => $testimonial->rate, 'dontShowRate' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>

                                            <p class="mt-25 text-gray font-14"><?php echo nl2br($testimonial->comment); ?></p>

                                            <div class="bottom-gradient"></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination testimonials-swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <div id="parallax2" class="ltr">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax3" class="ltr">
                    <div data-depth="0.8" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$subscribes and !empty($subscribes) and !$subscribes->isEmpty()): ?>
            <div class="position-relative subscribes-container pe-none user-select-none">
                <div id="parallax4" class="ltr d-none d-md-block">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title"><?php echo e(trans('home.subscribe_now')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.subscribe_now_hint')); ?></p>
                    </div>

                    <div class="position-relative mt-30">
                        <div class="swiper-container subscribes-swiper px-12">
                            <div class="swiper-wrapper py-20">

                                <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
                                            <?php if($subscribe->is_popular): ?>
                                                <span class="badge badge-primary badge-popular px-15 py-5"><?php echo e(trans('panel.popular')); ?></span>
                                            <?php endif; ?>

                                            <div class="plan-icon">
                                                <img src="<?php echo e($subscribe->icon); ?>" class="img-cover" alt="">
                                            </div>

                                            <h3 class="mt-20 font-30 text-secondary"><?php echo e($subscribe->title); ?></h3>
                                            <p class="font-weight-500 text-gray mt-10"><?php echo e($subscribe->description); ?></p>

                                            <div class="d-flex align-items-start text-primary mt-30">
                                                <span class="font-36 line-height-1"><?php echo e(addCurrencyToPrice($subscribe->price)); ?></span>
                                            </div>

                                            <ul class="mt-20 plan-feature">
                                                <li class="mt-10"><?php echo e($subscribe->days); ?> <?php echo e(trans('financial.days_of_subscription')); ?></li>
                                                <li class="mt-10">
                                                    <?php if($subscribe->infinite_use): ?>
                                                        <?php echo e(trans('update.unlimited')); ?>

                                                    <?php else: ?>
                                                        <?php echo e($subscribe->usable_count); ?>

                                                    <?php endif; ?>
                                                    <span class="ml-5"><?php echo e(trans('update.subscribes')); ?></span>
                                                </li>
                                            </ul>

                                            <?php if(auth()->check()): ?>
                                                <form action="/panel/financial/pay-subscribes" method="post" class="w-100">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input name="amount" value="<?php echo e($subscribe->price); ?>" type="hidden">
                                                    <input name="id" value="<?php echo e($subscribe->id); ?>" type="hidden">
                                                    <button type="submit" class="btn btn-primary btn-block mt-50"><?php echo e(trans('financial.purchase')); ?></button>
                                                </form>
                                            <?php else: ?>
                                                <a href="/login" class="btn btn-primary btn-block mt-50"><?php echo e(trans('financial.purchase')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination subscribes-swiper-pagination"></div>
                        </div>

                    </div>
                </section>

                <div id="parallax5" class="ltr d-none d-md-block">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax6" class="ltr d-none d-md-block">
                    <div data-depth="0.6" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$find_instructors and !empty($findInstructorSection)): ?>
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"><?php echo e($findInstructorSection['title'] ?? ''); ?></h2>
                            <p class="font-16 font-weight-normal text-gray mt-10"><?php echo e($findInstructorSection['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($findInstructorSection['button1'])): ?>
                                    <a href="<?php echo e($findInstructorSection['button1']['link']); ?>" class="btn btn-primary"><?php echo e($findInstructorSection['button1']['title']); ?></a>
                                <?php endif; ?>

                                <?php if(!empty($findInstructorSection['button2'])): ?>
                                    <a href="<?php echo e($findInstructorSection['button2']['link']); ?>" class="btn btn-outline-primary ml-15"><?php echo e($findInstructorSection['button2']['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="<?php echo e($findInstructorSection['image']); ?>" class="find-instructor-section-hero" alt="<?php echo e($findInstructorSection['title']); ?>">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                            <div class="example-instructor-card bg-white rounded-sm shadow-lg  p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/default/img/home/toutor_finder.svg" class="img-cover rounded-circle" alt="user name">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block"><?php echo e(trans('update.looking_for_an_instructor')); ?></span>
                                    <span class="text-gray font-12 font-weight-500"><?php echo e(trans('update.find_the_best_instructor_now')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        

        <?php if($homeSection->name == \App\Models\HomeSection::$become_instructor and !empty($becomeInstructorSection)): ?>
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"><?php echo e($becomeInstructorSection['title'] ?? ''); ?></h2>
                            <p class="font-16 font-weight-normal text-gray mt-10"><?php echo e($becomeInstructorSection['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($becomeInstructorSection['button1'])): ?>
                                    <a href="<?php echo e(empty($authUser) ? '/login' : (($authUser->isUser()) ? $becomeInstructorSection['button1']['link'] : '/panel/financial/registration-packages')); ?>" class="btn btn-primary"><?php echo e($becomeInstructorSection['button1']['title']); ?></a>
                                <?php endif; ?>

                                <?php if(!empty($becomeInstructorSection['button2'])): ?>
                                    <a href="<?php echo e(empty($authUser) ? '/login' : (($authUser->isUser()) ? $becomeInstructorSection['button2']['link'] : '/panel/financial/registration-packages')); ?>" class="btn btn-outline-primary ml-15"><?php echo e($becomeInstructorSection['button2']['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="<?php echo e($becomeInstructorSection['image']); ?>" class="find-instructor-section-hero" alt="<?php echo e($becomeInstructorSection['title']); ?>">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">

                            <div class="example-instructor-card bg-white rounded-sm shadow-lg border p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/default/img/home/become_instructor.svg" class="img-cover rounded-circle" alt="user name">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span class="font-14 font-weight-bold text-secondary d-block"><?php echo e(trans('update.become_an_instructor')); ?></span>
                                    <span class="text-gray font-12 font-weight-500"><?php echo e(trans('update.become_instructor_tagline')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$forum_section and !empty($forumSection)): ?>
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="<?php echo e($forumSection['image']); ?>" class="find-instructor-section-hero" alt="<?php echo e($forumSection['title']); ?>">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle" alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-dark"><?php echo e($forumSection['title'] ?? ''); ?></h2>
                            <p class="font-16 font-weight-normal text-gray mt-10"><?php echo e($forumSection['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center">
                                <?php if(!empty($forumSection['button1'])): ?>
                                    <a href="<?php echo e($forumSection['button1']['link']); ?>" class="btn btn-primary"><?php echo e($forumSection['button1']['title']); ?></a>
                                <?php endif; ?>

                                <?php if(!empty($forumSection['button2'])): ?>
                                    <a href="<?php echo e($forumSection['button2']['link']); ?>" class="btn btn-outline-primary ml-15"><?php echo e($forumSection['button2']['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$video_or_image_section and !empty($boxVideoOrImage)): ?>
            <section class="home-sections home-sections-swiper position-relative">
                <div class="home-video-mask"></div>
                <div class="container home-video-container d-flex flex-column align-items-center justify-content-center position-relative" style="background-image: url('<?php echo e($boxVideoOrImage['background'] ?? ''); ?>')">
                    <a href="<?php echo e($boxVideoOrImage['link'] ?? ''); ?>" class="home-video-play-button d-flex align-items-center justify-content-center position-relative">
                        <i data-feather="play" width="36" height="36" class=""></i>
                    </a>

                    <div class="mt-50 pt-10 text-center">
                        <h2 class="home-video-title"><?php echo e($boxVideoOrImage['title'] ?? ''); ?></h2>
                        <p class="home-video-hint mt-10"><?php echo e($boxVideoOrImage['description'] ?? ''); ?></p>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$instructors and !empty($instructors) and !$instructors->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.instructors')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.instructors_hint')); ?></p>
                    </div>

                    <a href="/instructors" class="btn btn-border-white"><?php echo e(trans('home.all_instructors')); ?></a>
                </div>

                <div class="position-relative mt-20 ltr">
                    <div class="owl-carousel customers-testimonials instructors-swiper-container">

                        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="shadow-effect">
                                    <div class="instructors-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="instructors-card-avatar">
                                            <img src="<?php echo e($instructor->getAvatar(108)); ?>" alt="<?php echo e($instructor->full_name); ?>" class="rounded-circle img-cover">
                                        </div>
                                        <div class="instructors-card-info mt-10 text-center">
                                            <a href="<?php echo e($instructor->getProfileUrl()); ?>" target="_blank">
                                                <h3 class="font-16 font-weight-bold text-dark-blue"><?php echo e($instructor->full_name); ?></h3>
                                            </a>

                                            <p class="font-14 text-gray mt-5"><?php echo e($instructor->bio); ?></p>
                                            <div class="stars-card d-flex align-items-center justify-content-center mt-10">
                                                <?php
                                                    $i = 5;
                                                ?>
                                                <?php while(--$i >= 5 - $instructor->rates()): ?>
                                                    <i data-feather="star" width="20" height="20" class="active"></i>
                                                <?php endwhile; ?>
                                                <?php while($i-- >= 0): ?>
                                                    <i data-feather="star" width="20" height="20" class=""></i>
                                                <?php endwhile; ?>
                                            </div>

                                            <?php if(!empty($instructor->hasMeeting())): ?>
                                                <a href="<?php echo e($instructor->getProfileUrl()); ?>?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-15"><?php echo e(trans('home.reserve_a_live_class')); ?></a>
                                            <?php else: ?>
                                                <a href="<?php echo e($instructor->getProfileUrl()); ?>" class="btn btn-primary btn-sm rounded-pill mt-15"><?php echo e(trans('public.profile')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>
        <?php endif; ?>

        
        <?php if($homeSection->name == \App\Models\HomeSection::$half_advertising_banner and !empty($advertisingBanners2) and count($advertisingBanners2)): ?>
            <div class="home-sections container">
                <div class="row">
                    <?php $__currentLoopData = $advertisingBanners2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-<?php echo e($banner2->size); ?>">
                            <a href="<?php echo e($banner2->link); ?>">
                                <img src="<?php echo e($banner2->image); ?>" class="img-cover rounded-sm" alt="<?php echo e($banner2->title); ?>">
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
        

        <?php if($homeSection->name == \App\Models\HomeSection::$organizations and !empty($organizations) and !$organizations->isEmpty()): ?>
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.organizations')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.organizations_hint')); ?></p>
                    </div>

                    <a href="/organizations" class="btn btn-border-white"><?php echo e(trans('home.all_organizations')); ?></a>
                </div>

                <div class="position-relative mt-20">
                    <div class="swiper-container organization-swiper-container px-12">
                        <div class="swiper-wrapper py-20">

                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="home-organizations-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="home-organizations-avatar">
                                            <img src="<?php echo e($organization->getAvatar(120)); ?>" class="img-cover rounded-circle" alt="<?php echo e($organization->full_name); ?>">
                                        </div>
                                        <a href="<?php echo e($organization->getProfileUrl()); ?>" class="mt-25 d-flex flex-column align-items-center justify-content-center">
                                            <h3 class="home-organizations-title"><?php echo e($organization->full_name); ?></h3>
                                            <p class="home-organizations-desc mt-10"><?php echo e($organization->bio); ?></p>
                                            <span class="home-organizations-badge badge mt-15"><?php echo e($organization->webinars_count); ?> <?php echo e(trans('panel.classes')); ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination organization-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($homeSection->name == \App\Models\HomeSection::$blog and !empty($blog) and !$blog->isEmpty()): ?>
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title"><?php echo e(trans('home.blog')); ?></h2>
                        <p class="section-hint"><?php echo e(trans('home.blog_hint')); ?></p>
                    </div>

                    <a href="/blog" class="btn btn-border-white"><?php echo e(trans('home.all_blog')); ?></a>
                </div>

                <div class="row mt-35">

                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-4 col-lg-4 mt-20 mt-lg-0">
                            <?php echo $__env->make('web.default.blog.grid-list',['post' =>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </section>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
     <section class="home-sections container">
            <div>
    <div class="blog_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center mb_80">
                        <h3>
                            Frequently Asked Questions
                        </h3>
                        <p>
                            Some of the Frequently asked queston are listed below:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="theme_according mb_100" id="accordion1">
                        
                            <div class="card">
                                <div class="card-header pink_bg" id="headingFour<?php echo e(1); ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text_white collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseFour<?php echo e(1); ?>"
                                                aria-expanded="false"
                                                aria-controls="collapseFour<?php echo e(1); ?>">
                                            Who should participate?  
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseFour<?php echo e(1); ?>"
                                     aria-labelledby="headingFour<?php echo e(1); ?>"
                                     data-parent="#accordion1">
                                    <div class="card-body">
                                        <div class="curriculam_list">

                                            <div class="curriculam_single">
                                                <div class="curriculam_left">

                                                    <span>Youths in Imo State in particular and any interested citizen of Imo State.</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--  -->
                            
                            
                       <!-- -->
            
      </section>
      
           <section class="home-sections container">
            <div>
    <div class="blog_area">
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="theme_according mb_100" id="accordion1">
                        
                            <div class="card">
                                <div class="card-header pink_bg" id="headingFour<?php echo e(2); ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text_white collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseFour<?php echo e(2); ?>"
                                                aria-expanded="false"
                                                aria-controls="collapseFour<?php echo e(2); ?>">
                                            How many people will you be training?  
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseFour<?php echo e(2); ?>"
                                     aria-labelledby="headingFour<?php echo e(2); ?>"
                                     data-parent="#accordion1">
                                    <div class="card-body">
                                        <div class="curriculam_list">

                                            <div class="curriculam_single">
                                                <div class="curriculam_left">

                                                    <span>To train, connect and support at least 50,000 youths in Imo State to be gainfully employed or self-employed.</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--  -->
                            
                            
                       <!-- -->
            
      </section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate().'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nani/Desktop/workspace/skillup-imo/resources/views/web/default/pages/home.blade.php ENDPATH**/ ?>