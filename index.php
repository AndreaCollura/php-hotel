<?php 


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

/* echo $hotels[0]['name'];
var_dump($hotels); */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>index</title>
</head>


<body>

    <div class="container-fluid">
        <h1 class="text-uppercase text-center fw-bold">hotel Advisor</h1>
    </div>
    <div class="mt-5">
        <table class="table table-warning table-striped">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col" class="text-center">parking</th>
                    <th scope="col" class="text-center">vote</th>
                    <th scope="col" class="text-center" >distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name'] ?></th>
                        <td><?php echo $hotel['description'] ?></td>
                        <?php if ($hotel['parking']) { ?>
                            <td class="text-uppercase text-center">yes</td>
                        <?php } else { ?>
                            <td class="text-uppercase text-center">no</td>
                        <?php  } ?>
                        <td class="text-center"><?php echo $hotel['vote'] ?></td>
                        <td class="text-center"><?php echo $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>