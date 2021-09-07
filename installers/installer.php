<?php
echo "===================================";
echo ">>>>>>>>         HPB       <<<<<<<<";
echo "===================================";
echo "";
echo "Benvenuto nel programma di installazione di HPB!";
$s = readline("Vuoi procedere con l'installazione? [Y / n]");
if ($s == "n") {
  die("\n\nOk, abortisco!\n\nGrazie per avermi usato <3\n");
}
echo "\n\nOk, continuiamo con l'installazione!";
echo "Che versione di HPB vuoi installare?";
echo "Per saperne di piu': https://dev.hpbdev.cf/news/06-09-2021-01";
echo "[N] -> Versione Normale";
echo "[C] -> Versione Compatta";
$v = readline("Ok, inserisci la versione: ");
if ($v != "N" && $v != "C") {
  die("\n\nHey! hai inserito una versione sbagliata!\n");
}
echo "\nOk, sto per installare l'ultima versione che ho trovato!";
echo "Per accertarmi che sia giusta te la scrivo!";
$version = file_get_contents("https://api.hpbdev.cf/public?request=latestVersion");
echo "Ultima versione secondo https://api.hpbdev.cf/public?request=latestVersion -> $version";
$dir = readline("Inserisci la directory ove vuoi installare HPB: ");

echo "\n\n==================\nProcesso di installazione pronto!\n\nPronti...\nPartenza...\nVIA!\n\n";

$downurl = file_get_contents("https://dev.hpbdev.cf/public?request=getDownloadULRs&oth=$version");
$d = explode("_", $downurl);

foreach($d as $dw) {
  shell_exec("wget $dw");
}















