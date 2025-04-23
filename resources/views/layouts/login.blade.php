<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | BengkelKoding</title>

  @include('layouts.lib.ext-css')

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #000;
      height: 100vh;
      overflow: hidden;
      position: relative;
    }

    .background-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    /* Animated gradient background */
    .gradient-bg {
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, 
        rgba(24, 42, 115, 0.8), 
        rgba(33, 138, 174, 0.8),
        rgba(32, 167, 172, 0.8), 
        rgba(76, 81, 191, 0.8),
        rgba(126, 87, 194, 0.8));
      background-size: 400% 400%;
      animation: gradientMove 15s ease infinite;
      transform-origin: center center;
      z-index: -2;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPgogIDxkZWZzPgogICAgPHBhdHRlcm4gaWQ9InBhdHRlcm4iIHg9IjAiIHk9IjAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgcGF0dGVyblRyYW5zZm9ybT0icm90YXRlKDQ1KSI+CiAgICAgIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxIiBmaWxsPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDMpIj48L3JlY3Q+CiAgICA8L3BhdHRlcm4+CiAgPC9kZWZzPgogIDxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjcGF0dGVybikiPjwvcmVjdD4KPC9zdmc+');
      z-index: -1;
    }

    /* Floating particles */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
    
    .particle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      animation: float 25s infinite linear;
    }

    .particle:nth-child(1) { width: 4px; height: 4px; top: 25%; left: 30%; animation-delay: 0s; animation-duration: 25s; }
    .particle:nth-child(2) { width: 8px; height: 8px; top: 40%; left: 70%; animation-delay: 2s; animation-duration: 35s; }
    .particle:nth-child(3) { width: 5px; height: 5px; top: 65%; left: 20%; animation-delay: 4s; animation-duration: 30s; }
    .particle:nth-child(4) { width: 3px; height: 3px; top: 85%; left: 40%; animation-delay: 6s; animation-duration: 40s; }
    .particle:nth-child(5) { width: 6px; height: 6px; top: 15%; left: 60%; animation-delay: 8s; animation-duration: 33s; }
    .particle:nth-child(6) { width: 7px; height: 7px; top: 55%; left: 80%; animation-delay: 10s; animation-duration: 38s; }

    @keyframes float {
      0% { transform: translateY(0) translateX(0) rotate(0deg); opacity: 1; }
      50% { opacity: 0.7; }
      100% { transform: translateY(-500px) translateX(200px) rotate(360deg); opacity: 0; }
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding: 20px;
    }

    .login-box {
      width: 100%;
      max-width: 450px;
      background: rgba(20, 20, 40, 0.65);
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 24px;
      padding: 2.5rem;
      color: #fff;
      animation: fadeIn 1.2s ease;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .login-box::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.03) 0%, transparent 60%);
      transform: rotate(45deg);
      z-index: -1;
    }

    .glow {
      position: absolute;
      width: 40%;
      height: 30%;
      background: rgba(75, 192, 255, 0.15);
      border-radius: 50%;
      filter: blur(60px);
      z-index: -1;
    }

    .glow-1 { top: -10%; left: -10%; }
    .glow-2 { bottom: -15%; right: -10%; background: rgba(147, 112, 219, 0.15); }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
    }

    .logo-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 12px;
      box-shadow: 0 4px 15px rgba(0, 114, 255, 0.3);
    }

    .logo-icon i {
      font-size: 22px;
      color: white;
    }

    .logo-text {
      font-size: 2rem;
      font-weight: 700;
      color: #fff;
      text-decoration: none;
    }

    .logo-text b {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .login-box-msg {
      font-size: 1rem;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 2rem;
      text-align: center;
      font-weight: 300;
    }

    .form-group {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .form-control {
      width: 100%;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 1rem 1.2rem;
      padding-left: 3rem;
      color: #fff;
      transition: all 0.3s ease;
      font-size: 0.95rem;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.1);
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 114, 255, 0.25);
      border-color: rgba(0, 114, 255, 0.5);
    }

    .input-icon {
      position: absolute;
      top: 50%;
      left: 1.2rem;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.5);
      font-size: 1rem;
    }

    .toggle-password {
      position: absolute;
      top: 50%;
      right: 1.2rem;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .toggle-password:hover {
      color: rgba(255, 255, 255, 0.8);
    }

    .btn-primary {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      border: none;
      border-radius: 12px;
      padding: 1rem;
      font-weight: 600;
      width: 100%;
      transition: all 0.3s ease;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 0.5rem;
      box-shadow: 0 4px 15px rgba(0, 114, 255, 0.3);
      position: relative;
      overflow: hidden;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.6s ease;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 114, 255, 0.4);
    }
    
    .btn-primary:hover::before {
      left: 100%;
    }

    .alert {
      border-radius: 12px;
      background-color: rgba(255, 59, 48, 0.1);
      border: 1px solid rgba(255, 59, 48, 0.2);
      color: #ffbfbf;
      font-size: 0.9rem;
      padding: 1rem;
      margin-bottom: 1.5rem;
    }

    .alert ul {
      list-style-type: none;
      padding-left: 0;
    }

    .alert li {
      margin-bottom: 0.25rem;
    }

    .alert li:last-child {
      margin-bottom: 0;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
    }

    .remember-label {
      display: flex;
      align-items: center;
      color: rgba(255, 255, 255, 0.7);
      cursor: pointer;
    }

    .checkbox {
      margin-right: 0.5rem;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      appearance: none;
      width: 16px;
      height: 16px;
      border-radius: 4px;
      position: relative;
      cursor: pointer;
    }

    .checkbox:checked::before {
      content: '\f00c';
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      font-size: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #00c6ff;
    }

    .forgot-link {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .forgot-link:hover {
      color: #00c6ff;
    }

    @media (max-width: 480px) {
      .login-box {
        padding: 2rem;
      }
      
      .logo-icon {
        width: 40px;
        height: 40px;
      }
      
      .logo-text {
        font-size: 1.7rem;
      }
    }
  </style>
</head>
<body>
  <div class="background-container">
    <div class="gradient-bg"></div>
    <div class="overlay"></div>
    <div class="particles">
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>
  </div>

  <div class="container">
    <div class="login-box">
      <div class="glow glow-1"></div>
      <div class="glow glow-2"></div>
      
      <div class="logo">
        <div class="logo-icon">
          <i class="fas fa-code"></i>
        </div>
        <a href="#" class="logo-text"><b>RS</b>KurangSehat</a>
      </div>
      
      <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
          <i class="fas fa-envelope input-icon"></i>
          <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required autofocus>
        </div>
        
        <div class="form-group">
          <i class="fas fa-lock input-icon"></i>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <i class="fas fa-eye toggle-password" id="eye-icon" onclick="togglePassword()"></i>
        </div>

        <div class="remember-forgot">
          <label class="remember-label">
            <input type="checkbox" class="checkbox" name="remember">
            Ingat Saya
          </label>
          <a href="#" class="forgot-link">Lupa Password?</a>
        </div>
        
        <button type="submit" class="btn btn-primary">MASUK</button>
      </form>
    </div>
  </div>

  @include('layouts.lib.ext-js')

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      const icon = document.getElementById('eye-icon');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>