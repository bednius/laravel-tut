
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" >
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirm</title>
  </head>
  <body>
    <div class="wrapper d-flex justify-content-center align-items-center p-3">
      <div class="loginBox">
        <div class="text-center pt-3">
          <h3>Dziękujemy za podtwierdzenie konta</h3>
        </div>
        <form class="form" method="POST">
            @csrf
            @method('DELETE')
            <div class="d-flex justify-content-between align-items-center mt-5">
                <button type="submit" class="delete">Usuń konto</button>
            </div>
        </form>
      </div>
    </div>
  </body>
</html>
