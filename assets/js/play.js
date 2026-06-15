const ESP32_IP = "192.168.129.104";

function playSong(song)
{
    fetch(`http://${ESP32_IP}/play?song=${song}`);
}

function stopSong()
{
    fetch(`http://${ESP32_IP}/stop`);
}

function playRadio(url)
{
    fetch(
        `http://${ESP32_IP}/radio?url=${encodeURIComponent(url)}`
    )
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));
}