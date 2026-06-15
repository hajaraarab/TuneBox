<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuneBox</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <div class="container">

        <header>
            <h1>🎵 TuneBox</h1>
            <p>Jouw muziek en favoriete radiozenders op één plek</p>
        </header>

        <main>

            <div class="tabs">
                <button class="tab-btn active" onclick="showTab('music')">
                    🎵 Mijn Muziek
                </button>

                <button class="tab-btn" onclick="showTab('radio')">
                    📻 Radio
                </button>
            </div>

            <?php include 'myplaylist.php'; ?>

            <?php include 'radio.php'; ?>

        </main>

        <footer>
            <button class="stop-btn" onclick="stopSong()">
                ⏹ Stop Afspelen
            </button>
        </footer>

    </div>

    <script src="/assets/js/play.js"></script>
    <script src="/assets/js/tabs.js"></script>
</body>
</html>