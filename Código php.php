<?php
// lista-01-udwmj-2025/script.php

$tarefas = ["Estudar JS", "Praticar PHP", "Subir projeto no GitHub"];

echo "Minhas Tarefas:\n";
foreach ($tarefas as $i => $tarefa) {
    echo ($i + 1) . " - " . $tarefa . "\n";
}
?>
