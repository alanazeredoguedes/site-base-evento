<?php  
         
namespace App\Application\Hackthon\EventoBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonEventoBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonEventoBundle';
    }
}