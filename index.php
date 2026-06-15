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

            <section id="music" class="card tab-content active-tab">

                <h2>🎧 Mijn Playlist</h2>
                <p>Speel je eigen opgeslagen nummers af.</p>

                <div class="button-grid">
                    <button onclick="playSong('song.mp3')">
                        ▶ Song 1
                    </button>

                    <button onclick="playSong('song2.mp3')">
                        ▶ Song 2
                    </button>

                    <button onclick="playSong('song3.mp3')">
                        ▶ Song 3
                    </button>
                </div>

            </section>

            <section id="radio" class="card tab-content radio-card">

                <h2>📻 Radiozenders</h2>
                <p>Luister live naar Belgische radio.</p>

                <div class="button-grid">
                    <button onclick="playRadio('https://icecast.omroep.nl/funx-bb-mp3')">
                        FunX
                    </button>
                    
                    <button onclick="playRadio('http://icecast.vrtcdn.be/radio1-high.mp3')">
                        Radio 1
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/ra2vlb-high.mp3')">
                        Radio 2 Vlaams-Brabant
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/klara-high.mp3')">
                        Klara
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/klaracontinuo-high.mp3')">
                        Klara Continuo
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/stubru-high.mp3')">
                        Studio Brussel
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/stubru_tijdloze-high.mp3')">
                        De Tijdloze
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/stubru_untz-high.mp3')">
                        Studio Brussel UNTZ
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/stubru_bruut-high.mp3')">
                        StuBru Bruut
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/mnm-high.mp3')">
                        MNM
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/mnm_hits-high.mp3')">
                        MNM Hits
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/radiobene-high.mp3')">
                        Radio Bene
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/radio1_classics-high.mp3')">
                        Radio 1 Classics
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/radio2_relax-high.mp3')">
                        Radio 2 Relax
                    </button>

                    <button onclick="playRadio('http://icecast.vrtcdn.be/ketnetradio-high.mp3')">
                        Ketnet Hits
                    </button>
                </div>

            </section>

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