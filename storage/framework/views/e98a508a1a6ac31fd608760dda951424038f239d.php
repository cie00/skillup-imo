<?php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
?>

<footer class="footer bg-secondary position-relative user-select-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" footer-subscribe d-block d-md-flex align-items-center justify-content-between">
                    <div class="flex-grow-1">
                        <strong><?php echo e(trans('footer.join_us_today')); ?></strong>
                        <span class="d-block mt-5 text-white"><?php echo e(trans('footer.subscribe_content')); ?></span>
                        
                    </div>
                    <div class="subscribe-input bg-white p-10 flex-grow-1 mt-30 mt-md-0">
                        <form action="/newsletters" method="post">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group d-flex align-items-center m-0">
                                <div class="w-100">
                                    <input type="text" name="newsletter_email" class="form-control border-0 <?php $__errorArgs = ['newsletter_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(trans('footer.enter_email_here')); ?>"/>
                                    <?php $__errorArgs = ['newsletter_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill"><?php echo e(trans('footer.join')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $columns = ['first_column','second_column','third_column','forth_column'];
    ?>

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
            <!--<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
            <!--    <div class=" col-lg-3 col-md-3">-->
            <!--        <?php if(!empty($footerColumns[$column])): ?>-->
            <!--            <?php if(!empty($footerColumns[$column]['title'])): ?>-->
            <!--                <span class="header d-block text-white font-weight-bold"><?php echo e($footerColumns[$column]['title']); ?></span>-->
            <!--            <?php endif; ?>-->

            <!--            <?php if(!empty($footerColumns[$column]['value'])): ?>-->
            <!--                <div class="mt-20">-->
                                <!--<?php echo $footerColumns[$column]['value']; ?>-->
            <!--                </div>-->
            <!--            <?php endif; ?>-->
            <!--        <?php endif; ?>-->
            <!--    </div>-->
            <!--<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->

        </div>

        <div class="mt-40 border-blue py-25 d-flex align-items-center justify-content-between">
            <div class="footer-logo">
                <a href="/">
                    <?php if(!empty($generalSettings['footer_logo'])): ?>
                        <!--<img src="<?php echo e($generalSettings['footer_logo']); ?>" class="img-cover" alt="footer logo">-->
                         <!--<img src="<?php echo e($generalSettings['logo']); ?>"  height="65px" alt="site logo">-->
                         <img src="<?php echo e(asset('assets/default/img/footer-logo-skill.png')); ?>"  height="65px" alt="site logo">
                         
                    <?php endif; ?>
                </a>
            </div>
            <div class="footer-social">
                <?php if(!empty($socials) and count($socials)): ?>
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social['link']); ?>">
                            <img src="<?php echo e($social['image']); ?>" alt="<?php echo e($social['title']); ?>" class="mr-15">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /Users/nani/Desktop/workspace/skillup-imo/resources/views/web/default/includes/footer.blade.php ENDPATH**/ ?>