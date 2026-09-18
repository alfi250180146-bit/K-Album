
<?php

function hitungTotalNilaiStok($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product["harga"] * $product["stok"];
    }

    return $total;
}

function tentukanWarnaStok($stok)
{
    if ($stok < 3) {
        return "stok-kritis";
    }

    return "";
}

?>