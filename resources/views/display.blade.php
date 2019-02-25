<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <h2>Product Discount Calculator</h2>
    <tr>
        <td>Product</td>
        <td>{{$product}}</td>
    </tr>

    <tr>
        <td>Price:</td>
        <td>{{'$'.$list}}</td>
    </tr>

    <tr>
        <td>Product Discount</td>
        <td>{{'$'.$discount_amount}}</td>
    </tr>

    <tr>
        <td>Discount Amount</td>
        <td>{{'-'.'$'.$price}}</td>
    </tr>
</table>

</body>
</html>