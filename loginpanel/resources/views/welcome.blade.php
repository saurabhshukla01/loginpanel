<html>
    <head>
        <style>
            body {
  margin: 0;
  padding: 0;
  background: #f5f5f5;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.card {
  width: 300px;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  border-top: 4px solid #f6226f;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

input {
  padding: 10px;
  border: none;
  background-color: transparent;
  border-bottom: 1px solid #ccc;
  color: #333;
}

.buttons {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
}

.login-button {
  padding: 10px 20px;
  background-color: #f6226f;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.register-button {
  padding: 10px 20px;
  background-color: #fff;
  color: #333;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
}

@media (max-width: 480px) {
  .card {
    width: 100%;
    max-width: 300px;
  }
}
            </style>
            <meta name="csrf_token" content="{{ csrf_token() }}">
    </head>
<body>
<div class="container">
    <div class="card">
        <form id="login_id" method="post" action="{{ url('/api/login') }}">
            <input type="text" id="email" name="email" placeholder="UserName" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div class="buttons">
                <button onclick="window.open('http://127.0.0.1:8000')" class="register-button">Register</button>
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script>
$("#login_id").on('submit', function (et) {
    et.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://127.0.0.1:8000/api/login",
        type: "POST",
        data: {"email": email, "password": password},
        success: function (response) {
            if (response.status == 201) {
                window.location = "/dashboard";
            } else {
                window.location = "/login";
                alert("Something went wrong");
            }
        },
        error: function (response) {
            console.error("Error:", response);
        }
    });
});
</script>
</html>