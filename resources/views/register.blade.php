<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>@lang('messages.welcome')</h1>

    <a href="/register/id">INDONESIA</a>
    <a href="/register/en">ENGLISH</a>

    <h1>Register</h1>

    <form  action="{{ route('register') }}"  method="post">
        <!-- Name -->
        @csrf
        <label for="name">@lang('messages.form.name')</label>
        <input type="text" name="name" id="name"  />
    
        <!-- Email-->
        <label for="email">@lang('messages.form.email')</label>
        <input type="email" name="email" id="email"  />
    
        <!-- Password -->
        <label for="password">@lang('messages.form.pw')</label>
        <input type="password" name="password" id="password"  />
    
        <!-- Confirm password -->
        <label for="password_confirmation">@lang('messages.form.cpw')</label>
        <input type="password" name="password_confirmation"  id="password_confirmation" />
    
        <!-- Submit button -->
        <button type="submit">Register</button>
    </form>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        @method('POST')
        <button type="submit">Logout</button>
    </form>
    
    
</body>
</html>