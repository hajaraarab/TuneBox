<?php

$esp32 = "192.168.129.104";

$song = $_GET['song'] ?? '';

file_get_contents(
    "http://$esp32/play?song=" . urlencode($song)
);

echo "OK";