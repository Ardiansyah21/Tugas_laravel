<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="register.css">
    </head>

    <body>
        <div class="container">
          <h1>Register</h1>
            <form method="POST">
              @csrf
                <label>Username</label>
                <br>
                <input type="text" name="username" >
                <br>
                <label>Nama</label>
                <br>
                <input type="text" name="name">
                <br>
                <label>Email</label>
                <br>
                <input type="text" name="email" >
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password">
                <br>
                <button type="submit">Register</button>
                <p> Sudah punya akun?
                  <a href="login">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>