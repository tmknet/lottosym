<!-- 
    pseudo kod


    Inicjalizuj:
  liczbaWylosowanychLiczb = 6
  zakresLiczb = 49
  utworzPustąTablicę wylosowaneLiczby
  trafioneLiczby = 0

Losuj 6 unikalnych liczb od 1 do 49 i zapisz je w wylosowaneLiczby

Wypisz "Witaj w grze Lotto! Wylosowano 6 liczb z zakresu 1-49."

Wypisz "Podaj sw oje 6 liczb (oddzielone przecinkami): "
Wczytaj inputGracz

Przetwórz inputGracz, dzieląc go na tablicę graczLiczby

Dopóki ilość elementów w graczLiczby < liczbaWylosowanychLiczb:
  Wypisz "Podaj kolejną liczbę: "
  Wczytaj kolejnaLiczba
  Dodaj kolejnaLiczba do graczLiczby

Dopóki trafioneLiczby < liczbaWylosowanychLiczb:
  Losuj liczbę z zakresu 1-49
  Jeżeli wylosowanaLiczba nie występuje w wylosowaneLiczby:
    Dodaj wylosowanaLiczba do wylosowaneLiczby

Dla każdej liczby w graczLiczby:
  Jeżeli liczba występuje w wylosowaneLiczby:
    Zwiększ trafioneLiczby o 1

Wypisz "Wylosowane liczby to: " + wylosowaneLiczby
Wypisz "Twoje trafione liczby: " + graczLiczby
Wypisz "Liczba trafień: " + trafioneLiczby

 -->

<?php

$chosenNumbersCount = 6;
$numberRange = 49;
$chosenNumbers = array();
$matchedNumbers = 0;

$playerNumbers = array();

$index = 0;

while( count( $chosenNumbers ) < $chosenNumbersCount ){
    $randomNumbers = rand( 1, $numberRange );
    if( !in_array( $randomNumbers, $chosenNumbers ) ){
        $chosenNumbers[] = $randomNumbers;

    }
}

if( $_SERVER["REQUEST_METHOD"] == "POST"){

  if( isset($_POST["numbers"]) ){
    $playerNumbers = explode(',', $_POST["numbers"]);
  };
  
  if (count($playerNumbers) !== 6) {
    echo "This is not 6 numbers.";
  } elseif(count($playerNumbers) === 6) {
    while( $index < count($playerNumbers) ){
      $numberPlayer = intval( $playerNumbers[$index] );
      if( in_array( $numberPlayer, $chosenNumbers ) ){
        $matchedNumbers++;
      };
      $index++;
    };
    echo "Wylosowane liczby : <br><b> ". implode(',', $chosenNumbers) ." </b>";
    echo "<br>Twoje trafione liczby <br><b>" .implode( ', ', $playerNumbers ) . "</b>";
    echo  "<br>Liczba trafien <br><b>" . $matchedNumbers . "</b>";
  }
  
};

?>
