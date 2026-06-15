function playSong(song)
{
    fetch(`/api/play.php?song=${encodeURIComponent(song)}`);
}

function stopSong()
{
    fetch(`/api/stop.php`);
}

function playRadio(url)
{
    fetch(`/api/radio.php?url=${encodeURIComponent(url)}`);
}