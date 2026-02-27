@extends('layouts/index')

    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="/assets/img/face.png" />
                    {{-- <p id="profile-name" class="profile-name-card"></p> --}}
                    <h3>Form Login</h3>
                    <form action="/sesi/login" method="POST">
                        @csrf
                        <div class="mb-3 text-left">
                            <label for="email" class="form-label" style="color:white;">Email</label>
                            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="Email" autofocus>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="password" class="form-label" style="color:white;">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        <div class="mb-3 text-left">
                            <label for="captcha" class="form-label" style="color:white;">Captcha</label><br>
                            <span>{!! captcha_img('flat') !!}</span>
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
