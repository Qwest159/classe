<?php
class Mathematiques
{
    public static function sqrt(float $x): float
    {
        return sqrt($x);
    }

    public static function sin(float $x): float
    {
        return sin($x);
    }

    public static function cos(float $x): float
    {
        return cos($x);
    }
}

// Appeler les méthodes statiques
echo $racine_carree = Mathematiques::sqrt(9) . PHP_EOL;
echo $sinus = Mathematiques::sin(3.14) . PHP_EOL;
echo $cosinus = Mathematiques::cos(3.14) . PHP_EOL;
