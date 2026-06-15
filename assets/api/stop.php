<?php

$esp32 = "192.168.129.104";

file_get_contents(
    "http://$esp32/stop"
);

echo "OK";