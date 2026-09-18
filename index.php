<?php

require_once __DIR__ . "/products.php";
require_once __DIR__ . "/functions.php";

$totalNilaiStok = hitungTotalNilaiStok($products);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Pop Album Collection</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 25px;
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #333333;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .cd {
            font-size: 42px;
        }

        h1 {
            margin: 8px 0;
            color: #a1a156;
            font-size: 28px;
        }

        .subtitle {
            margin: 0;
            color: #888888;
            font-size: 14px;
        }

        .table-box {
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
        }

        th {
            background: #f1eef8;
            color: #5d4d87;
            padding: 13px;
            text-align: left;
            font-size: 14px;
            border-bottom: 2px solid #d8d0e8;
        }

        td {
            padding: 13px;
            border-top: 1px solid #eeeeee;
            font-size: 14px;
        }

        tr:hover {
            background: #fafafa;
        }

        .stok-kritis {
            background: #ffe8e8 !important;
            color: #a33a3a;
        }

        .harga {
            color: #6b5b95;
            font-weight: bold;
            white-space: nowrap;
        }

        .stok {
            text-align: center;
        }

        .kategori {
            color: #6b5b95;
            font-weight: bold;
        }

        .total {
            margin-top: 18px;
            padding: 15px;
            background: #f7f5fb;
            border: 1px solid #e2dcef;
            border-radius: 8px;
            color: #5d4d87;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 18px;
            color: #aaaaaa;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            h1 {
                font-size: 23px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <div class="cd">💿</div>

        <h1>K-Pop Album Collection</h1>

        <p class="subtitle">
            BTS • SEVENTEEN • CORTIS
        </p>
    </div>

    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Album</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product): ?>

                    <?php $warna = tentukanWarnaStok($product["stok"]); ?>

                    <tr class="<?= $warna ?>">
                        <td><?= $product["id"] ?></td>
                        <td><?= $product["nama"] ?></td>
                        <td class="kategori"><?= $product["kategori"] ?></td>
                        <td class="harga">
                            Rp <?= number_format($product["harga"], 0, ',', '.') ?>
                        </td>
                        <td class="stok"><?= $product["stok"] ?></td>
                        <td><?= $product["deskripsi"] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="total">
        Total Nilai Stok:
        Rp <?= number_format($totalNilaiStok, 0, ',', '.') ?>
    </div>

    <div class="footer">
        Product Information System
    </div>

</div>

</body>
</html>