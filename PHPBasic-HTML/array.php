<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <?php
    //Sample of an associative Array:
    $customer['firstName'] = 'Cari';
    $customer['lastName'] = 'Kay';
    $customer['city'] = 'New York';
    $customer['state'] = 'New York';

    echo "My first name is " .$customer['firstName'];
    echo '<br>';

    //sample of an indexed array:
    $car[0] = 'Ferrari';
    $car[1] = 'Porshe';
    $car[2] = 'Mustang';
    $car[3] = 'Jaguar';
    $car[4] = 'Audi';

    echo "my first car is a $car[0]\n";
    echo "My other car is a $car[3]";

//creating associative array using shorthand;

$restaurant = [
  [
    'name' => 'Nobu',
    'type' => 'sushi',
    'price' => 'Expensive'
  ],
  ['name' => 'Burger King',
  'type' => 'Fast Food',
  'price' => 'Cheap'
  ]
];
echo '<br>';
echo $restaurant[0]['name']. ' is very '.$restaurant[0]['price'];
echo '<br>';
echo $restaurant[1]['name']. ' is very '.$restaurant[1]['price'];



     ?>
  </body>
</html>
