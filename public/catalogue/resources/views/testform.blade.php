<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
    </head>
    <body>
    <main class="section">
        <div class="container">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Films</p>
                </header>
                <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td>{{ $film->id }}</td>
                                <td><strong>{{ $film->title }}</strong></td>
                                <td><a class="button is-primary" href="">Voir</a></td>
                                <td><a class="button is-warning" href="">Modifier</a></td>
                                <td>
                                    <form action="" method="post">
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </main>
  </body>
</html>