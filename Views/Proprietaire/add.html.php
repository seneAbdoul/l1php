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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="container mt-5">
        <h2>Formulaire d'ajout</h2>
        <form method="POST"  action="<?= WEB_ROUTE ?>">
        <input type="hidden" name="Controller" value="Proprietaire">
            <input type="hidden" name="action" value="<?=!isset($Proprietaire['idp']) ? 'add' : 'Modification' ?>">
            <input type="hidden" name="idp" value="<?=isset($Proprietaire['idp']) ? $Proprietaire['idp'] : '' ;?>">
            <div class="form-group">
                <label for="nomp">Nom</label>
                <input type="text" class="form-control" id="nomp" name="nomp"
                value="<?=isset($Proprietaire['nomp']) ? $Proprietaire['nomp'] : '' ;?>" 
                >
            </div>
            <div class="form-group">
                <label for="prenomp">Prénom</label>
                <input type="text" class="form-control" id="prenomp" name="prenomp" placeholder="Entrez votre prénom"
                value="<?=isset($Proprietaire['prenomp']) ? $Proprietaire['prenomp'] : '' ;?>" >
            </div>
            <div class="form-group">
                <label for="telephonep">Téléphone</label>
                <input type="tel" class="form-control" id="telephonep" name="telephonep" placeholder="Entrez votre numéro de téléphone"
                value="<?=isset($Proprietaire['telephonep']) ? $Proprietaire['telephonep'] : '' ;?>" >
            </div>
            <div class="form-group">
                <label for="emailp">Email</label>
                <input type="email" class="form-control" id="emailp" name="emailp" placeholder="Entrez votre email"
                value="<?=isset($Proprietaire['emailp']) ? $Proprietaire['emailp'] : '' ;?>" >
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
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

