<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleb2.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/questionarios.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">



    <title>DIPENDENZA DIGITALE • QUESTIONARIO</title>
</head>

<body>
    <div class="container" style="background-color: rgba(255, 255, 255, 0.681);">
        <form action="ris.php" method="post">
            <h3 class="bold-text" id="titleq">QUESTIONARIO</h3>
            <p>
                <b>In questa pagina è presente un questionario sull'argomento presente nella pagina precente.</b>
            </p>

            <div class="domande" style="display: flex;"></div>
            <ol>
                <li>
                    <h3>Scrivi il tuo username :</h3>
                    <input type="text" name="user" id="user">
                </li>
                <li>
                    <h3 class="hard-text">Quanto tempo trascorri mediamente al giorno utilizzando dispositivi digitali (computer, smartphone, tablet, ecc.)?</h3>

                    <div>
                        <input type="radio" name="d1" id="d1A" value="A" required />
                        <label for="d1A">Meno di un'ora</label>
                    </div>

                    <div>
                        <input type="radio" name="d1" id="d1B" value="B" />
                        <label for="d1B">Da 1 a 3 ore</label>
                    </div>

                    <div>
                        <input type="radio" name="d1" id="d1C" value="C" />
                        <label for="d1C">Da 3 a 5 ore </label>
                    </div>

                    <div>
                        <input type="radio" name="d1" id="d1D" value="D" />
                        <label for="d1D">Più di 5 ore</label>
                    </div>
                </li>

                <li>

                    <h3 class="hard-text">Quali delle seguenti attività online svolgi più frequentemente?</h3>

                    <div>
                        <input type="radio" name="d2" id="d2A" value="A" required />
                        <label for="d2A">Utilizzo dei social media (Facebook, Instagram, Twitter, ecc.)</label>
                    </div>

                    <div>
                        <input type="radio" name="d2" id="d2B" value="B" />
                        <label for="d2B">Guardare video su piattaforme di streaming (YouTube, Netflix, ecc.)</label>
                    </div>

                    <div>
                        <input type="radio" name="d2" id="d2C" value="C" />
                        <label for="d2C">Navigare su internet per informazioni di interesse personale</label>
                    </div>

                    <div>
                        <input type="radio" name="d2" id="d2D" value="D" />
                        <label for="d2D">Giocare online (videogiochi, giochi su smartphone, ecc.)</label>
                    </div>
                </li>

                <li>

                    <h3 class="hard-text">Hai mai provato a ridurre o limitare il tempo trascorso online, ma hai faticato a farlo?</h3>

                    <div>
                        <input type="radio" name="d3" id="d3A" value="A" required />
                        <label for="d3A">Sì, spesso mi trovo a tornare ad utilizzare i dispositivi più del previsto</label>
                    </div>

                    <div>
                        <input type="radio" name="d3" id="d3B" value="B" />
                        <label for="d3B">Sì, alcune volte ho difficoltà a limitare il mio tempo online</label>
                    </div>

                    <div>
                        <input type="radio" name="d3" id="d3C" value="C" />
                        <label for="d3C">No, riesco a gestire bene il mio tempo online senza problemi</label>
                    </div>

                    <div>
                        <input type="radio" name="d3" id="d3D" value="D" />
                        <label for="d3D">Non ho mai provato a ridurre o limitare il tempo trascorso online</label>
                    </div>

                </li>

                <li>

                    <h3 class="hard-text">Hai mai sperimentato sintomi come irritabilità o ansia quando sei impossibilitato a utilizzare dispositivi digitali?</h3>

                    <div>
                        <input type="radio" name="d4" id="d4A" value="A" required />
                        <label for="d4A">Sì, mi sento agitato/a quando non posso utilizzare i dispositivi digitali</label>
                    </div>

                    <div>
                        <input type="radio" name="d4" id="d4A" value="B" />
                        <label for="d4B">Sì, ma solo in rari casi mi sento irritabile o ansioso/a senza dispositivi digitali</label>
                    </div>

                    <div>
                        <input type="radio" name="d4" id="d4C" value="C" />
                        <label for="d4C">No, non sperimento sintomi di irritabilità o ansia quando non uso i dispositivi digitali</label>
                    </div>

                    <div>
                        <input type="radio" name="d4" id="d4D" value="D" />
                        <label for="d4D">Non sono sicuro/a</label>
                    </div>

                </li>

                <li>

                    <h3 class="hard-text">Hai mai trascurato impegni o responsabilità a causa dell'uso eccessivo dei dispositivi digitali?</h3>

                    <div>
                        <input type="radio" name="d5" id="d5A" value="A" required />
                        <label for="d5A">Sì, ho rinunciato ad altre attività o compiti importanti per passare più tempo online</label>
                    </div>

                    <div>
                        <input type="radio" name="d5" id="d5B" value="B" />
                        <label for="d5B">Sì, ma solo occasionalmente ho trascurato altri impegni a causa dei dispositivi digitali</label>
                    </div>

                    <div>
                        <input type="radio" name="d5" id="d5C" value="C" />
                        <label for="d5C">No, riesco a bilanciare bene il mio tempo online e le mie responsabilità</label>
                    </div>

                    <div>
                        <input type="radio" name="d5" id="d5D" value="D" />
                        <label for="d5D">Non sono sicuro/a</label>
                    </div>
                </li>


                <li>
                    <h3 class="hard-text">Hai mai cercato di nascondere o minimizzare il tuo utilizzo dei dispositivi digitali rispetto a familiari o amici?</h3>

                    <div>
                        <input type="radio" name="d6" id="d6A" value="A" required />
                        <label for="d5A"> Sì, evito di parlare del tempo che trascorro online o lo minimizzo</label>
                    </div>

                    <div>
                        <input type="radio" name="d6" id="d6B" value="B" />
                        <label for="d6B">Sì, ma solo con alcune persone specifiche</label>
                    </div>

                    <div>
                        <input type="radio" name="d6" id="d6C" value="C" />
                        <label for="d6C">No, sono aperto/a riguardo al mio utilizzo dei dispositivi digitali</label>
                    </div>

                    <div>
                        <input type="radio" name="d5" id="d5D" value="D" />
                        <label for="vD">Non sono sicuro/a</label>
                    </div>
                </li>
            </ol>
    </div>

    <button type="submit" class="cta" target="_blank"  name="invio">
        Invio dati<i class="ri-arrow-right-line" name="invio" id="invio"></i>
    </button>

    </form>
    </div>
</body>

</html>