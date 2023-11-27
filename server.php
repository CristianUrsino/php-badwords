
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>

    <?php
        if(isset($_GET['phrase']) && isset($_GET['badWord'])){
            $phrase =  $_GET['phrase'];
            $n_characters = strlen($phrase);
            $phrase = explode(' ', $phrase);
            $n_words = count($phrase);
            $badWord = $_GET['badWord'];
            $newPhrase = $phrase;
            if(in_array($badWord, $newPhrase)){
                for($i = 0;$i<count($newPhrase);$i++){
                    if($newPhrase[$i] === $badWord){
                        $newPhrase[$i] = '***';
                    }
                }
            }else{
                $newPhrase = 'non trovata';
            }
            $newPhrase = implode(' ', $newPhrase);
            $phrase = implode(' ', $phrase);
        }
    ?>

    <div>
        <h4>Frase: <?php echo $phrase; ?></h4>
        <div>Numero di caratteri: <?php echo $n_characters; ?></div>
        <div>Numero di parole: <?php echo $n_words; ?></div>
        <div>Parola da censurare: <?php echo $badWord; ?></div>
        <h3>Nuova frase: <?php echo $newPhrase ?></h3>
    </div>
    
</body>
</html>