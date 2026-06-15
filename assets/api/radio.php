<?php

$esp32 = "192.168.129.104";

$url = $_GET['url'] ?? '';

file_get_contents(
    "http://$esp32/radio?url=" . urlencode($url)
);

echo "OK";