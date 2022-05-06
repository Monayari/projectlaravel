<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>  بازنشانی رمزعبور</title>
</head>
<body class="body-signup">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#8f8574" fill-opacity="1" d="M0,320L60,298.7C120,277,240,235,360,218.7C480,203,600,213,720,234.7C840,256,960,288,1080,282.7C1200,277,1320,235,1380,213.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <div  class="login-div">
        <div class="logo"> <h1> لــــــرن </h1></div>
    <div class="title"> بازنشانی رمزعبور </div>
    <div class="message">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <div class="fields">
        <form @submit.prevent="checkform" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="username">
                <i class="fa fa-envelope"></i>
                    <input id="email" class="user-input" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder=" ایمیل">
                </div>

            <div class="password">
                <i class="fa fa-lock"></i>
                <input id="password" class="pass-input" type="password" name="password" required placeholder="رمزعبور" v-model="password">
            </div>

            <div class="confpassword">
                <i class="fa fa-lock"></i>
                <input id="password_confirmation"  type="password"
                name="password_confirmation" required class="confpass-input" placeholder="تکرار رمزعبور" v-model="confpassword">
            </div>

            <button class="signin-button" type="submit">بازنشانی رمزعبور </button>
        </form>
    </div>
</div>

</body>
</html>
