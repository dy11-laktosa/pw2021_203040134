<?php
$shoes = [
    [
        "nama" => "sepatu yonex power sushion 65",
        "deskripsi" => "color blue stabilo original",
        "size" => "40-42",
        "harga" => 550000,
        "category" => "sepatu sport",
        "foto" => "spt1.png"
    ],
    [
        "nama" => "sepatu yonex aerus 3 ",
        "deskripsi" => "color blue original",
        "size" => "39-43",
        "harga" => 1000000,
        "category" => "sepatu sport",
        "foto" => "spt2.png"
    ],
    [
        "nama" => "sepatu yonex XHB ex stabilo",
        "deskripsi" => "color yellow original",
        "size" => "38-43",
        "harga" => 2000000,
        "category" => "sepatu sport",
        "foto" => "spt3.png"
    ], [
        "nama" => "sepatu adidas adizero ueberschall",
        "deskripsi" => "color blue stabilo original",
        "size" => "37-40",
        "harga" => 450000,
        "category" => "sepatu sport",
        "foto" => "spt4.png"
    ],
    [
        "nama" => "sepatu yonex shb comfort black",
        "deskripsi" => "color black original",
        "size" => "39-44",
        "harga" => 250000,
        "category" => "sepatu sport",
        "foto" => "spt5.png"
    ],
    [
        "nama" => "sepatu asics gel rocket",
        "deskripsi" => "color blue original",
        "size" => "37-43",
        "harga" => 650000,
        "category" => "sepatu sport",
        "foto" => "spt6.png"
    ],
    [
        "nama" => "sepatu li ning sonic boom",
        "deskripsi" => "color black original",
        "size" => "40-44",
        "harga" => 750000,
        "category" => "sepatu sport",
        "foto" => "spt7.png"
    ],
    [
        "nama" => "sepatu li ning smash",
        "deskripsi" => "color orange original",
        "size" => "38-43",
        "harga" => 600000,
        "category" => "sepatu sport",
        "foto" => "spt8.png"
    ],
    [
        "nama" => "sepatu li ning cloud",
        "deskripsi" => "color orange original",
        "size" => "39-42",
        "harga" => 599000,
        "category" => "sepatu sport",
        "foto" => "spt9.png"
    ],
    [
        "nama" => "sepatu mizuno wave fang",
        "deskripsi" => "color white original",
        "size" => "40-43",
        "harga" => 250000,
        "category" => "sepatu sport",
        "foto" => "spt10.png"
    ],

];
function rupiahIDR($duit)
{
    return "Rp" . number_format($duit, 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3e</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Size</th>
                    <th>Harga</th>
                    <th>Category</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shoes as $shoe => $shoes) : ?>
                    <tr>
                        <td><?= $shoe + 1; ?></td>
                        <td><?= $shoes["nama"]; ?></td>
                        <td><?= $shoes["deskripsi"]; ?></td>
                        <td><?= $shoes["size"]; ?></td>
                        <td><?= rupiahIDR($shoes["harga"]) ?></td>
                        <td><?= $shoes["category"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="img/<?= $shoes["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#cari').DataTable();
        });
    </script>
</body>

</html>