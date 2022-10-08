<?php  
         
namespace App\Application\Hackthon\GaleriaBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonGaleriaBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonGaleriaBundle';
    }
}