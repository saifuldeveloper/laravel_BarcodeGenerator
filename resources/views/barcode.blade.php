

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


{{-- 
   (1).laravel installtion
    (2)Intall picqer/php-barcode-generator package
    composer require picqer/php-barcode-generator --}}



    {{-- <h1>Bercode</h1>
    <h4>120 120 2520 252</h4> --}}




    {{-- png Image barcode --}}

    @php
    $generatePNG = new Picqer\Barcode\BarcodeGeneratorPNG();
        
    @endphp
    <img src="data:image/png;base64,{{ base64_encode($generatePNG->getBarcode('582558jhfggh',$generatePNG::TYPE_CODE_128)) }}" alt="barcode" / style="margin-top: 400px;margin-left:200px;">

    

    
</body>
</html>