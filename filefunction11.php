<?php


// condho fungsi void (fungsi yang tidak mengembalaikan nilai)

function sayHello()
{
    echo "Selamat Pagi" . PHP_EOL;
}
sayHello();

echo "<br>";

function hi(string $nama, int $umur)
{
    echo "hay Perkenalkan nama saya  $nama  dan umur saya $umur" . PHP_EOL;
}
hi("Mirlani", 21);
echo "<br>";
hi("araman", 15);
echo "<br>";
hi("Mirlani", 21);
echo "<br>";

// function yang mengembalikan nilai
function hu(int $a, int $b)
{
    $c = $a + $b;
    return $c;
}

$y = 10;
$x = 20;

echo "Hasil 50 + 30 =" . hu(50, 30) . PHP_EOL;
echo "<br>";
echo "Hasil 70 + 10 =" . hu(70, 10) . PHP_EOL;
echo "<br>";
echo "hasil dari $y + $x =" . hu($y, $x) . PHP_EOL;
echo "<br>";



// rumus mengecek bilangan prima

function prima(int $bilangan)
{
    $prima = true;
    for ($i = 2; $i < $bilangan; $i++) {
        if ($bilangan % $i == 0) {
            $prima = false;
        } else {
            break;
        }
    }
    return $prima;
}

if (prima(3)) {
    echo "<br>Bilangan prima";
} else {
    echo "<br> Bilangan bukan prima";
}
