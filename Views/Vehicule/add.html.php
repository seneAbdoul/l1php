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
        <h2>Ajouter un Véhicule</h2>
        <form method="POST"  action="<?= WEB_ROUTE ?>">
            <input type="hidden" name="Controller" value="Vehicule">
            <input type="hidden" name="action" value="<?=!isset($Vehicule['idv']) ? 'add' : 'Modification' ?>">
            <input type="hidden" name="idv" value="<?=isset($Vehicule['idv']) ? $Vehicule['idv'] : '' ;?>">
            <div class="form-group">
                <label for="marquev">Marque</label>
                <input type="text" class="form-control" id="marquev" name="marquev"
                value="<?=isset($Vehicule['marquev']) ? $Vehicule['marquev'] : '' ;?>" >
            </div>
            <div class="form-group">
                <label for="couleurv">Couleur</label>
                <input type="text" class="form-control" id="couleurv" name="couleurv" 
                value="<?=isset($Vehicule['couleurv']) ? $Vehicule['couleurv'] : '' ;?>">
            </div>
            <div class="form-group">
                <label for="poidsVidev">Poids à Vide</label>
                <input type="number" class="form-control" id="poidsVidev" name="poidsVidev" 
                value="<?=isset($Vehicule['poidsVidev']) ? $Vehicule['poidsVidev'] : '' ;?>">
            </div>
            <div class="form-group">
                <label for="poidsPleinv">Poids en Charge</label>
                <input type="number" class="form-control" id="poidsPleinv" name="poidsPleinv" 
                value="<?=isset($Vehicule['poidsPleinv']) ? $Vehicule['poidsPleinv'] : '' ;?>">
            </div>
            <div class="form-group">
                <label for="proprietaire">Propriétaire</label>
                <select class="form-control" id="idp" name="idp" required>
                    <option value="">Sélectionner un propriétaire</option>
                    <?php foreach ($proprietaires as $proprietaire): ?>
                        <option value="<?= $proprietaire['idp'];  ?>" selected><?= $proprietaire['nomp'] . ' ' . $proprietaire['prenomp']; ?></option>
                    <?php endforeach; ?>
                </select>
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
