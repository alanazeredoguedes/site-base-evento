<?php  
         
namespace App\Application\Hackthon\PatrocinadorBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonPatrocinadorBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonPatrocinadorBundle';
    }
}