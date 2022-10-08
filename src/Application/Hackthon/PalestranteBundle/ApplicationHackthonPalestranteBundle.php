<?php  
         
namespace App\Application\Hackthon\PalestranteBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonPalestranteBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonPalestranteBundle';
    }
}