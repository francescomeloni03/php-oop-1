<?php

class Movie
{
    public $titolo;
    public $regista;
    public $dataUscita;
    public $genere;
    public $durata;

    function __construct($titolo, $regista, $dataUscita, $genere, $durata)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->dataUscita = $dataUscita;
        $this->genere = $genere;
        $this->durata = $durata;
    }

}

$colpaMia = new Movie("Colpa Mia", "Domingo Gonzalez", "08/06/2023", "Drammatico", "117");
$senzaLimiti = new Movie("Senza Limiti", "David M.Rosenthal", "09/09/2022", "Romantico", "118" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Esercizio</title>
</head>
<body>
<div class="d-flex">
        <div class=" m-3 border border-dark d-flex flex-column justify-content-center align-items-center">
            <div class="mb-2"><strong>Titolo:</strong> <?php echo $colpaMia->titolo; ?></div>
            <div class="mb-2"><strong>Regista:</strong> <?php echo $colpaMia->regista; ?></div>
            <div class="mb-2"><strong>Data di uscita:</strong> <?php echo $colpaMia->dataUscita; ?></div>
            <div class="mb-2"><strong>Genere:</strong> <?php echo $colpaMia->genere; ?></div>
            <div class="mb-2"><strong>Durata Film:</strong> <?php echo $colpaMia->durata; ?> Minuti</div>
        </div>
          <div class=" m-3 border border-dark d-flex flex-column justify-content-center align-items-center">
            <div class="mb-2"><strong>Titolo:</strong> <?php echo $senzaLimiti->titolo; ?></div>
            <div class="mb-2"><strong>Regista:</strong> <?php echo $senzaLimiti->regista; ?></div>
            <div class="mb-2"><strong>Data di uscita:</strong> <?php echo $senzaLimiti->dataUscita; ?></div>
            <div class="mb-2"><strong>Genere:</strong> <?php echo $senzaLimiti->genere; ?></div>
            <div class="mb-2"><strong>Durata Film:</strong> <?php echo $senzaLimiti->durata; ?> Minuti</div>
        </div>
</div>
</body>
</html>