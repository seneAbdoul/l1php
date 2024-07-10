<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="container mt-5">
        <h2>Liste des Propriétaires</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proprietaires as $proprietaire): ?>
                <tr>
                    <td><?= ($proprietaire['codep']); ?></td>
                    <td><?= ($proprietaire['nomp']); ?></td>
                    <td><?= ($proprietaire['prenomp']); ?></td>
                    <td><?= ($proprietaire['telephonep']); ?></td>
                    <td><?= ($proprietaire['emailp']); ?></td>
                    <td>
                                          <div class="action" style="display: flex;justify-content:space-around">
                                          <a href="<?= WEB_ROUTE.'?Controller=Proprietaire&Views=Modification&id='.$proprietaire['idp'] ?>">
                                          <i class="fas fa-solid fa-pen-to-square"></i></a>
                                          <a href="<?= WEB_ROUTE.'?Controller=Proprietaire&Views=Supprimer&id='.$proprietaire['idp'] ?>">
                                          <i class="fas fa-archive" style="color:#002879"></i></a>
                                          </div>
                     </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
