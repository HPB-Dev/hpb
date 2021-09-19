<?php

///////////////////////////////////
//   ///   ////      ///      // //
//   ///   ////  //   //  //   ////
//   ///   ////      ///      /////
//         ////   //////    ///////
//   ///   ////   //////      /////
//   ///   ////   //////  //   ////
//   ///   ////   //////      /////
///////////////////////////////////
// >Hypertext Preprocessor Based //
///////////////////////////////////
//          Codice HPB           //
///////////////////////////////////
// Creato da: Federico Cosma     //
// Licenza: CC BY 3.0            //
// Loader: PHP 7.4               //
// Versione: 0.7.1               //
///////////////////////////////////

namespace hpb;

class Main{
// Plugin Loader
private function plugin($type, $name) {
	if ($type == "carica") {
		copy("plugins/$name.hpb", "plugins/.temp_$name.php");
		include("plugins/.temp_$name.php");
	} elseif ($type == "attiva") {
		include("plugins/.temp_$name.php");
	} else {
		unlink("plugins/.temp_$name.php");
		die();
	}
}

// MKDir
public function crea($nome, $permessi) {
   mkdir($nome, $permessi);
   chmod($nome, $permessi);
}

// FWrite
public function scrivi($nome, $contenuto, $formato) {
   $handle=fopen($nome, $formato);
   fwrite($handle, $contenuto);
   fclose($handle);
}

// Lettore File
public function leggi($file) {
    $output=file_get_contents($file);
	return $output;
}

// Variabile Vuota
public function vuoto($var) {
    if (empty($var)) {
        $output=true;
    } else {
        $output=false;
    }
	return $output;
}

// Criptare un testo
public function codifica($tex) {
    $output=base64_encode($tex);
	return $output;
}

// Decriptare un testo
public function decodifica($tex) {
    $output=base64_decode($tex);
	return $output;
}

//Comando Shell
public function shell($comando) {
    shell.exec($comando);
}

// STR Replace 
public function sostituisci($carattere1, $carattere2, $testo) {
    $output=str_replace($carattere1, $carattere2, $testo);
    return $output;
}

// Redi
public function reindirizzamento($url, $tempo) {
   if (empty($tempo)) {
        header("Location: $url");
   } else {
        header("refresh:$tempo;url=$url");
   }
}


// File Exists
public function esiste($file) {
    if (file_exists($file)) {
        $output=true;
    } else {
        $output=false;
    }
    return $output;
}

// Uguale
public function uguale($var1, $var2) {
	if ($var1 == $var2) {
	     $output=true;
	} else {
       $output=false;
	}
	return $output;
}

// Diverso
public function diverso($var1, $var2) {
	if ($var1 != $var2) {
		$output=true;
	} else {
		$output=false;
	}
	return $output;
}

// Scrivi
public function stampa($testo) {
	echo $testo;
}

// Random 
public function random($min, $max) {
	$output=rand($min, $max);
	return $output;
}

// Invia una Email
public function email($to, $from, $subject, $message) {
	       $sender = $from;
               $recipient = $to;
               $message = $curl;
               $headers = 'From:' . $sender;

               mail($recipient, $subject, $message, $headers);
}

// Data
public function data() {
	$output=date("d/m/Y");
	return $output;
}

// >> Sessioni <<

// Startare le sessioni
public function sessione() {
	session_start();
}

// Definire una sessione
public function sessione_definisci($nome, $value) {
	$_SESSION[$nome]=$value;
}

// Recuperare una sessione
public function sessione_recupera($nome) {
	$output=$_SESSION[$nome];
	return $output;
}

// Distruggi una sessione
public function sessione_distruggi() {
	session_destroy();
}

// IP Found
public function ip() {
	$output=$_SERVER["REMOTE_ADDR"];
	return $output;
}

// Stop
public function stop() {
	die("Errore");
}

// Var Dump
public function mostra_array($array) {
        var_dump($array);
}

// Json Decoder
public function json_decodificatore($json) {
	$output=json_decode($json);
	return $output;
}

// Json Encoder
public function json_codificatore($array) {
	$output=json_encode($vettore);
	return $output;
}

// Include
public function includi($file) {
	include($file);
}

// URL
public function url($name) {
	$output = $_GET[$name];
	return $output;
}

// Form
public function form($name) {
	$output = $_POST[$name];
	return $output;
}
}
