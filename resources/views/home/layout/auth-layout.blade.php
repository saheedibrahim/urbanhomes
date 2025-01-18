<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: system-ui, -apple-system, sans-serif;
}

.login-container {
  display: flex;
  min-height: 100vh;
}

.left-panel {
  flex: 1;
  background: #5754e8;
  /* padding: 3rem; */
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.left-panel h1 {
  font-size: 3rem;
  margin-bottom: 2rem;
}

.illustration {
  max-width: 80%;
}

.right-panel {
  flex: 1;
  padding: 3rem;
  background: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.logo {
  height: 40px;
  margin-bottom: 2rem;
}

.welcome-text {
  margin-bottom: 0.5rem;
  font-size: 2rem;
}

.subtitle {
  color: #666;
  margin-bottom: 2rem;
}

.social-buttons {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
}

.social-button {
  flex: 1;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  cursor: pointer;
}

.divider {
  text-align: center;
  margin: 1.5rem 0;
  color: #666;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-label {
  display: block;
  margin-bottom: 0.5rem;
  color: #333;
}

.form-input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  font-size: 1rem;
}

.forgot-password {
  text-align: right;
  margin-bottom: 1.5rem;
}

.forgot-password a {
  color: #5754e8;
  text-decoration: none;
}

.login-button {
  width: 100%;
  padding: 0.75rem;
  background: #5754e8;
  color: white;
  border: none;
  border-radius: 0.5rem;
  font-size: 1rem;
  cursor: pointer;
}

.signup-prompt {
  text-align: center;
  margin-top: 2rem;
  color: #666;
}

.signup-prompt a {
  color: #5754e8;
  text-decoration: none;
}

@media (max-width: 768px) {
  .login-container {
    flex-direction: column;
  }
  
  .left-panel {
    padding: 2rem;
  }
  
  .right-panel {
    padding: 2rem;
  }
  
  .social-buttons {
    flex-direction: column;
  }
}

.mp{
  margin: 0;
  padding: 0;
}
.tcp{
  color: #524CBF;
}

.bcp{
  background: #524CBF;
}
</style>
</head>
<body>
  <div class="container-fluid d-flex vh-100 mp" style="background: #312BA1;">
    <div class="col-6 left-panel" style="background: #312BA1;">
        <div class="" style="padding-left: 80px; width:600px;">
            <h1 class="">Rental management made easy...</h1>
        </div>
      <img src="/home/images/image17.png" class="" alt="Property Management Illustration" class="illustration">
    </div>

    <div class="col-6 bg-white" style=" border-top-left-radius: 50px; border-bottom-left-radius: 50px;">

        @yield('content')

    </div>
  </div>
</body>
</html>