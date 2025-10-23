<?php
class Araba {
    public $marka;
    public $renk;
    private $hiz = 0;

    public function __construct($marka, $renk) {
        $this->marka = $marka;
        $this->renk = $renk;
        echo "$this->marka ($this->renk) oluşturuldu.<br>";
    }

    public function hizlan($artis) {
        $this->hiz += $artis;
        echo "$this->marka hızlandı, yeni hız: $this->hiz km/s<br>";
    }

    public function yavasla($azalis) {
        $this->hiz -= $azalis;
        if ($this->hiz < 0) $this->hiz = 0;
        echo "$this->marka yavaşladı, yeni hız: $this->hiz km/s<br>";
    }

    public function mevcutHiz() {
        return $this->hiz;
    }
}

$araba1 = new Araba("BMW", "Siyah");
$araba1->hizlan(50);
$araba1->yavasla(20);
echo "Mevcut hız: " . $araba1->mevcutHiz();
?>
