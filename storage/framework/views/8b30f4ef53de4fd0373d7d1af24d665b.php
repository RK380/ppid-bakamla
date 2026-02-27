

    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="/assets/img/face.png" />
                    
                    <h3>Form Login</h3>
                    <form action="/sesi/login" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3 text-left">
                            <label for="email" class="form-label" style="color:white;">Email</label>
                            <input type="email" value="<?php echo e(Session::get('email')); ?>" name="email" class="form-control" placeholder="Email" autofocus>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="password" class="form-label" style="color:white;">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        <div class="mb-3 text-left">
                            <label for="captcha" class="form-label" style="color:white;">Captcha</label><br>
                            <span><?php echo captcha_img('flat'); ?></span>
                            <button type="button" onclick="refreshCaptcha()">↻</button><br>
                            <input type="text" name="captcha" class="form-control" required>
                        </div>
                        <div class="mb-3 d-grid">
                            <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" type="submit">Login</button>
                        </div>
                    </form><!-- /form -->
                </div>
            </div>
        </div>
    </div>

<?php echo $__env->make('layouts/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/sesi/index.blade.php ENDPATH**/ ?>