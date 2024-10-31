<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="./template/css/main.css">
</head>
<body>
    <header>
        <h1>🚀Formulaire d'inscription</h1>
    </header>
    <main>
        <fieldset>
            <legend>inscription</legend>
            <!-- https://giusmili.github.io/cube-halloween/asset/halloween-cover.jpeg -->
            <!-- https://www.google.com/search? -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"> <!-- post and get -->
                <label for="numero">Numéro de serie</label>
                <input type="text" 
                        id="numero" 
                        name="numero" 
                        placeholder="Numéro de serie" 
                        aria-required="true" 
                        autofocus>
                <label for="date">Votre anniversaire</label>
                <input type="date" id="date" name="date" aria-required="true">
                <label for="pays">Lieu de naissance</label>
                    <div class="select-pays" role="group" aria-labelledby="pays">
                        <select name="pays" id="pays" aria-required="true">
                            <option value="">Choisir son pays</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="italy">Italy</option>
                            <option value="spain">Spain</option>

                        </select>
                    </div>
                <input type="submit" value="Envoyer">
                
        </form>
</fieldset>
<pre>
</pre>
     <ul>
            <?php

                # tester le code PHP
               
                //print_r($_POST);
                foreach ($variable as $key => $value){

                    !empty($value) 
                    ? print "<li class=\"success\" $key : $value<br>".htmlentities($value)."<br>"   
                    : print "<li class=\"warning\">Remplir les champs $key</li>";
                }

            ?>
    </ul>  
      
   
    </main>
    <footer>
      <strong>
        &copy; - MIT - 2024</strong>
    </footer>
     
</body>
</html>