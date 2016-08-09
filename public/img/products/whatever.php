<?php 
$imgs = [
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/Rejuveniix.jpeg' => [246,520],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/Restoriix.jpeg' => [226,535],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/Slenderiiz.jpeg' => [600,552],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/Vináli.jpeg' => [264,403],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/air cleaner filter.png' => [600,519],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/air cleaner.png' => [600,519],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/beauty boost.jpeg' => [600,582],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/calm oil.jpeg' => [221,530],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/escape oil.jpeg' => [218,470],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/gold.png' => [281,256],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/ice oil.jpeg' => [188,426],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/image_1ba6d940-2ef4-4cc1-8cca-ddc6826266a2_grande.png' => [268,293],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/moa.jpeg' => [600,430],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/omega Q.jpeg' => [231,522],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/optimal M.jpeg' => [249,534],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/optimal V.jpeg' => [249,526],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/plastic bottle.jpeg' => [260,600],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/power boost.jpeg' => [600,582],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/pro youth.jpeg' => [350,265],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/protein powder.jpeg' => [565,565],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/silver.png' => [222,202],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/skin system.jpeg' => [600,600],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/spot cream.jpeg' => [357,600],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/steel bottle.jpeg' => [241,561],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/the d.jpeg' => [600,450],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/tight serum.jpeg' => [322,600],
'/Users/tim/Documents/projects-offline/ichealth/public/img/products/water filter.jpeg' => [214,547],
];

foreach ($imgs as $path => $dims) {
  if ($dims[0] > $dims[1]) {
    //pad vertically 
    echo "sips -p " . $dims[0] . ' '  . $dims[0] . ' --padColor FFFFFF "' . $path .'"' .PHP_EOL;
  } else {
    //pad horizontally
    echo "sips -p " . $dims[1] . ' '  . $dims[1] . ' --padColor FFFFFF "' . $path .'"' .PHP_EOL;
  }
}
