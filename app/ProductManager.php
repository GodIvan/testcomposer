<?php 
namespace src;
namespace Dodivan\Testcomposer\App;
use Dodivan\Testcomposer\App\SingletonTrait;
class  ProductManager
{
    use SingletonTrait;

    public  function getProductName(){

        echo "productname";
    }
}
