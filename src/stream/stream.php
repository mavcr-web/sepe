<?php
header('Content-Type: text/plain');
header('Cache-Control: no-cache');
header('X-Accel-Buffering: no'); // Para Nginx, evita buffering si aplica

$handle = fopen('text.txt', 'r');
if (!$handle) {
    http_response_code(500);
    echo "Error opening file.";
    exit;
}

while (!feof($handle)) {
    $line = fgets($handle); // fgets lee línea por línea = baja memoria.
    if ($line === false) break;

    echo trim($line) . "\n";
    ob_flush(); // ob_flush() + flush() = manda ya al cliente.
    flush(); 
    sleep(1); // sleep(1) = simula "streaming" a 1 línea por segundo.
}

fclose($handle);
?>