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
        <form id="resigter_id" method="post" action="{{ url('/api/user-register') }}">
            <div id="error-messages"></div>
            <input type="text" id="email" name="email" placeholder="Email" required>
            <input type="text" id="username" name="username" placeholder="UserName" required>
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile number" required>
            <input type="text" id="password" name="password" placeholder="Password" required>
            <div class="buttons">
                <button onclick="window.open('http://127.0.0.1:8000/login')" class="login-button">Login</button>
                <button type="submit" class="register-button">Resigter</button>
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
$("#register_id").on('submit', function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var username = $("#username").val();
    var name = $("#name").val();
    var password = $("#password").val();
    var mobile_number = $("#mobile_number").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://127.0.0.1:8000/api/user-register",
        type: "POST",
        data: {"email": email, "username": username, "name": name, "password": password, "mobile_number": mobile_number},
        success: function (response) {
            if (response.status == 201) {
                window.location = "/";
            } else {
                window.location = "/";
                alert("Something went wrong");
            }
        },
        error: function (response) {
            if (response.status == 400 && response.responseJSON && response.responseJSON.errors) {
                // Display validation errors in the UI
                var errors = response.responseJSON.errors;
                var errorMessages = [];

                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        errorMessages.push(errors[key][0]);
                    }
                }
                $("#error-messages").html("<p>Error:</p><ul><li>" + errorMessages.join("</li><li>") + "</li></ul>");
                window.location = "/";
                alert("Validation errors:\n" + errorMessages.join("\n"));
            } else {
                window.location = "/";
                console.error("Error:", response);
                alert("Something went wrong");
            }
        }
    });
});
</script>
</html>