<?php
echo "<h1>cadenas STRING</h1>";
echo"<h2>funcion strlen</h2><br>";


$str = 'abcdef'."<br>";
echo strlen($str)."<br>"; // 6

$str = ' ab cd '."<br>";
echo strlen($str)."<br>"; // 7




echo"<h2>funcion str_word_cout()</h2><br>";

$str = "hola amigod, tu
       espera          buen dia!"."<br>";

print_r(str_word_count($str, 1))."<br>";
print_r(str_word_count($str, 2))."<br>";
print_r(str_word_count($str, 1, 'àáãç3'))."<br>";

echo str_word_count($str)."<br>";

echo"<h2>funcion strrev()</h2><br>";

function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

echo mb_strrev("☆❤world"); // echo "dlrow❤☆"



echo"<h2>funcion strpos()</h2><br>";

$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// porque la posición de 'a' está en el 1° (primer) caracter.
if ($pos === false) {
    echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
} else {
    echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
    echo " y existe en la posición $pos";
}


echo"<h2>funcion str_replace()</h2><br>";

// Produce: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Produce: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Produce: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Produce: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;

?>