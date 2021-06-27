<?php
/* Requête préparée, seconde étape : lie les valeurs et exécute la requête */
$id = 1;
if (!$stmt->bind_param("i", $id)) {
    echo "Échec lors du liage des paramètres : (" . $stmt->errno . ") " . $stmt->error;
}

if (!$stmt->execute()) {
    echo "Échec lors de l'exécution : (" . $stmt->errno . ") " . $stmt->error;
}
?>