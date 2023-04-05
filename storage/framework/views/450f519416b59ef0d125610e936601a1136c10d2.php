<?php
    $userLanguages = !empty($generalSettings['site_language']) ? [$generalSettings['site_language'] => getLanguages($generalSettings['site_language'])] : [];

    if (!empty($generalSettings['user_languages']) and is_array($generalSettings['user_languages'])) {
        $userLanguages = getLanguages($generalSettings['user_languages']);
    }

    $localLanguage = [];

    foreach($userLanguages as $key => $userLanguage) {
        $localLanguage[localeToCountryCode($key)] = $userLanguage;
    }

?>

<style>
    .top-navbar.d-flex.border-bottom{
        background-color:#1F3B64;
        color:#fff;
    }
    .text-white{
        color:#fff;
    }
</style>
<div class="top-navbar d-flex border-bottom">
    <div class="container d-flex justify-content-between flex-column flex-lg-row">
        <div class="top-contact-box border-bottom d-flex flex-column flex-md-row align-items-center justify-content-center">

            <div class="d-flex align-items-center justify-content-center">
                                    <span class="d-flex align-items-center py-10 py-lg-0 text-white font-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone mr-10"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        415-716-1166
                    </span>
                
                                    <div class="border-left mx-5 mx-lg-15 h-100"></div>

                    <span class="d-flex align-items-center py-10 py-lg-0 text-white font-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-10"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        info@skillupimo.org.ng
                    </span>
                            </div>
                            
            <form action="/locale" method="post" class="text-white mr-15 mx-md-20">
                        

                        <div class="language-select text-white">
                            <div id="localItems" data-selected-country="TR" data-countries="{&quot;IQ&quot;:&quot;Arabic&quot;,&quot;US&quot;:&quot;English&quot;,&quot;ES&quot;:&quot;Spanish&quot;}" class="flagstrap"><select id="" name="country" style="display: none;"><option value="">
                                Select State</option><option value="IQ">Arabic</option><option value="US">English</option><option value="ES">Spanish</option></select><button style="display:none;" type="button" data-toggle="dropdown" id="flagstrap-drop-down-Bw95l0o3" class="btn btn-default btn-sm dropdown-toggle" aria-expanded="false"><span class="flagstrap-selected-Bw95l0o3"><i class="flagstrap-icon flagstrap-placeholder" style="display:none;"></i>
                                Select State</span><span class="caret" style="margin-left: 5px;"></span></button><ul id="flagstrap-drop-down-Bw95l0o3-list" aria-labelled-by="flagstrap-drop-down-Bw95l0o3" class="dropdown-menu" style="height: auto; max-height: 350px; overflow-x: hidden;"><li><a data-val="">
                                Select State</a></li><li><a data-val="IQ"><i class="flagstrap-icon flagstrap-iq" style="margin-right: 5px;"></i>Arabic</a></li><li><a data-val="US"><i class="flagstrap-icon flagstrap-us" style="margin-right: 5px;"></i>English</a></li><li><a data-val="ES"><i class="flagstrap-icon flagstrap-es"></i>Spanish</a></li></ul></div>
                        </div>
                    </form>
            <script type="text/javascript">
                                document.getElementsByID("localItems").innerHTML = "Select State";
                            </script>

            
            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
               


                <form action="/search" method="get" class="form-inline my-2 my-lg-0 navbar-search position-relative w-100">
                    <input class="form-control mr-5 rounded w-100" type="text" name="search" placeholder="<?php echo e(trans('navbar.search_anything')); ?>" aria-label="Search">

                    <button type="submit" class="text-white btn-transparent d-flex align-items-center justify-content-center search-icon">
                        <i data-feather="search" width="20" height="20" class="mr-10"></i>
                    </button>
                </form>
            </div>
        </div>
        
        
        
        
        
        

        <div class="xs-w-100 d-flex align-items-center justify-content-between text-white">
            <div class="d-flex text-white">

                <?php echo $__env->make(getTemplate().'.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="border-left mx-5 mx-lg-15 text-white"></div>

                <?php echo $__env->make(getTemplate().'.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php if(!empty($authUser)): ?>


                <div class="dropdown">
                    <a href="#!" class="navbar-user d-flex align-items-center ml-50 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo e($authUser->getAvatar()); ?>" class="rounded-circle" alt="<?php echo e($authUser->full_name); ?>">
                        <span class="font-16 user-name ml-10 text-white font-14"><?php echo e($authUser->full_name); ?></span>
                    </a>

                    <div class="dropdown-menu user-profile-dropdown text-white" aria-labelledby="dropdownMenuButton">
                        <div class="d-md-none border-bottom mb-20 pb-10 text-right text-white">
                            <i class="close-dropdown" data-feather="x" width="32" height="32" class="mr-10"></i>
                        </div>

                        <a class="dropdown-item" href="<?php echo e($authUser->isAdmin() ? '/admin' : '/panel'); ?>">
                            <img src="/assets/default/img/icons/sidebar/dashboard.svg" width="25" alt="nav-icon">
                            <span class="font-14 text-color-blue"><?php echo e(trans('public.my_panel')); ?></span>
                        </a>
                        <?php if($authUser->isTeacher() or $authUser->isOrganization()): ?>
                            <a class=" text-whitedropdown-item" href="<?php echo e($authUser->getProfileUrl()); ?>">
                                <img src="/assets/default/img/icons/profile.svg" width="25" alt="nav-icon">
                                <span class="font-14 text-color-blue"><?php echo e(trans('public.my_profile')); ?></span>
                            </a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="/logout">
                            <img src="/assets/default/img/icons/sidebar/logout.svg" width="25" alt="nav-icon">
                            <span class="font-14 text-color-blue"><?php echo e(trans('panel.log_out')); ?></span>
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="d-flex align-items-center ml-md-50">
                    <a href="/login" class="py-5 px-10 mr-10 text-white font-14"><?php echo e(trans('auth.login')); ?></a>
                    <a href="/register" class="py-5 px-10 text-white font-14"><?php echo e(trans('auth.register')); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts_bottom'); ?>
    <link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
    <script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
    <script src="/assets/default/js/parts/top_nav_flags.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/skillupimoorg/public_html/resources/views/web/default/includes/top_nav.blade.php ENDPATH**/ ?>