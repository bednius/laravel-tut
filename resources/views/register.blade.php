<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" >
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="wrapper d-flex justify-content-center align-items-center p-3">
      <div class="loginBox">
        <div class="text-center pt-3">
          <h3>Zarejestruj się</h3>
        </div>
        <form class="form" method="POST">
            @csrf
          <label>Email</label>
          <input
            id="email"
            type="text"
            name="email"
            text="Wpisz adres e-mail"
            additional="required"
          />
          <label>Password</label>
          <input
            id="password"
            type="text"
            name="password"
            text="Wpisz hasło"
            additional="required"
          />

          <div class="d-flex justify-content-between align-items-center mt-5">
            <button type="submit" class="submit">Dalej</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
