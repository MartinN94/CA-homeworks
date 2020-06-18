<?php
require_once '../vendor/autoload.php';

$company = $_POST['company'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$postal = $_POST['postal'];
$img = "img/icons8-billing-machine-96.png";


$css =  file_get_contents('css/styles.css');

$html = '
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>PDF Invoice</title>
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="container">
  <div class="info">
    <table>
      <tr>
        <th class="info-th2">
          <img src="'.$img.'" />
          <h1>Invoice</h1>
        </th>
        <th class="info-th">
          <h3>'.$company.'</h3>
          <p>'.$address.'</p>
          <p>'.$city.'</p>
          <p>'.$country.'</p>
          <p>'.$postal.'</p>
        </th>
      </tr>
    </table>
  </div>
  <div class="main">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Items</th>
          <th scope="col" class="product">Description</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Tax</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item 1</td>
          <td class="product">Website Development</td>
          <td>1</td>
          <td>$100.00</td>
          <td>1%</td>
          <td>$101.00</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="notes">
    <table>
      <tr>
        <th scope="col" class="notes-th">
          <h4>Notes:</h4>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem,
            asperiores molestias delectus iure, unde explicabo assumenda
            sequi soluta alias quae quo adipisci a dolores vero quod ipsam
            velit nostrum facere!
          </p>
        </th>
        <th scope="col" class="total">
          <h4>Total:</h4>
          <h1>$101.00</h1>
        </th>
      </tr>
    </table>
  </div>
</div>
</body>';

$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html, 2);
$mpdf->Output();


