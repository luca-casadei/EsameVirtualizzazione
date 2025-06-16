<?php
require './repository.php';
$elementi = $repo->get_elements();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <title>Sito di prova con elementi persistenti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="./style.css"/>
    <script src="./index.js" type="application/javascript"></script>
</head>

<body>
    <main>
        <section>
            <h1>Tutti gli elementi:</h1>
            <?php
            if ($elementi != null) {
                echo "<ul>";
                foreach ($elementi as $elemento) {
                    echo "<li>" . $elemento['Numero'] . " " . $elemento['Nome'] . " " . $elemento['Cognome'] . " " . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nessun elemento presente...</p>";
            }
            ?>
        </section>
        <section>
            <h1>Aggiungi un elemento</h1>
            <form id="addform">
                <fieldset>
                    <legend>Campi</legend>
                    <div class="colonna">
                        <div class="riga">
                            <label for="cNome">Nome:</label>
                            <input name="cNome" required id="cNome" type="text" placeholder="Nome">
                        </div>
                        <div class="riga">
                            <label for="cCogn">Cognome:</label>
                            <input name="cCogn" required id="cCogn" type="text" placeholder="Cognome">
                        </div>
                    </div>
                </fieldset>
                <button type="submit">Aggiungi</button>
            </form>
        </section>
    </main>
</body>

</html>