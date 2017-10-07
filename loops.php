<!DOCTYPE>
<html>
<head>
   <title>PHP Exercise 3: Links and Loops</title> 
</head>
<body>
    
    <h1>PHP Exercise 3: Links and Loops</h1> 
    
    <p>Use PHP echo and loops to output all three 
        links. Use if statements 
        to make sure everything outputs correctly:</p>
        
        
    <?php
    $links  = array( 
	
	
        0 => array ( 
            'linkBrand' => 'ANASTASIA BEVERLY HILLS', 
            'linkURL' =>'https://www.sephora.com/product/mini-liquid-lipstick-set-P423924?icid2=homepage_justarrived_ca_100517_productcarousel:p423924:product',
            'linkImage' => 'https://www.sephora.com/productimages/sku/s1993955-main-thumb-50.jpg',
            'linkDescription' => 'Mini Liquid Lipstick Set',
			'linkPrice' => 'C$33.00'), 
			
       1 => array(
            'linkBrand' => 'HUDA BEAUTY',
            'linkURL' =>'https://www.sephora.com/product/desert-dusk-eyeshadow-palette-P424149?skuId=1992445&icid2=just%20arrived:p424149',
            'linkImage' => 'https://www.sephora.com/productimages/sku/s1992445-main-thumb-50.jpg',
            'linkDescription' => 'Desert Dusk Eyeshadow Palette',
			'linkPrice' => 'C$85.00'),
        2 => array(
            'linkBrand' => 'FENTY BEAUTY BY RIHANNA',
            'linkURL' =>'https://www.sephora.com/product/killawatt-freestyle-highlighter-P64879845?skuId=1925924&icid2=just%20arrived:p64879845',
            'linkImage' => 'https://www.sephora.com/productimages/sku/s1925924-main-thumb-50.jpg',
            'linkDescription' => 'Killawatt Freestyle Highlighter',
			'linkPrice' => 'C$42.00'),
		 3 => array(
            'linkBrand' => 'NATASHA DENONA',
            'linkURL' =>'https://www.sephora.com/product/lila-eyeshadow-palette-P421738?skuId=1977354&icid2=just%20arrived:p421738',
            'linkImage' => 'https://www.sephora.com/productimages/sku/s1977354-main-thumb-50.jpg',
            'linkDescription' => 'Lila Eyeshadow Palette',
			'linkPrice' => 'C$168.00')
        );
        
    $link = array(); 

foreach ($link as $value) {
  echo "$value <br>";
}

    for( $i = 0; $i < 3; $i ++ )
    {
        echo $links[$i]['linkBrand'];
    }
    
    print_r( $links );
	
    
    ?>
    
    
    
</body>
</html>