<?php
// Créer un tableau de jeu vide (3x3)
$board = [
    [' ', ' ', ' '],  // Ligne 1
    [' ', ' ', ' '],  // Ligne 2
    [' ', ' ', ' '],  // Ligne 3
];

// Le joueur actuel (X commence)
$joueur_actuel = 'X';  // Le joueur 'X' commence

// Gérer un tour de jeu (lorsqu'un joueur clique sur une case)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les coordonnées de la case sur laquelle le joueur a cliqué
    $row = $_POST['row'];  // Récupère la ligne
    $col = $_POST['col'];  // Récupère la colonne

    // Si la case est vide, on place le symbole du joueur actuel
    if ($board[$row][$col] === ' ') {
        $board[$row][$col] = $joueur_actuel;
        
        // Vérifier si ce joueur a gagné
        if (Verif_Gagnant($board)) {
            $gagnant = $joueur_actuel;
        } elseif (Verif_Board_Plein($board)) {
            $gagnant = 'match nul';
        } else {
            // Passer au joueur suivant
            $joueur_actuel = ($joueur_actuel === 'X') ? 'O' : 'X';
        }
    }
}

// Fonction pour vérifier si un joueur a gagné
function Verif_Gagnant($board) {
    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2] && $board[$i][0] !== ' ') {
            return true;
        }
    }
    // Vérifier les colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i] && $board[0][$i] !== ' ') {
            return true;
        }
    }
    // Vérifier les diagonales
    if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] && $board[0][0] !== ' ') {
        return true;
    }
    if ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0] && $board[0][2] !== ' ') {
        return true;
    }

    return false;
}

// Fonction pour vérifier si le plateau est plein (match nul)
function Verif_Board_Plein($board) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] === ' ') {
                return false;  // Si une case est vide, le plateau n'est pas plein
            }
        }
    }
    return true;  // Le plateau est plein si aucune case n'est vide
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <div class="game-board">
        <?php
        // Afficher le tableau sous forme de formulaire (3x3)
        for ($row = 0; $row < 3; $row++) {
            for ($col = 0; $col < 3; $col++) {
                // Formulaire pour chaque case
                echo "<form method='POST'>
                        <button type='submit' name='row' value='$row' name='col' value='$col'>" . $board[$row][$col] . "</button>
                    </form>";
            }
        }
        ?>
    </div>

    <?php
    // Afficher le résultat du jeu
    if (isset($gagnant)) {
        if ($gagnant === 'match nul') {
            echo "<p>La partie est terminée par un match nul !</p>";
        } else {
            echo "<p>Le joueur $gagnant a gagné !</p>";
        }
    } else {
        echo "<p>Tour du joueur : <?php echo $joueur_actuel; ?></p>";
    }
    ?>
</body>
</html>
