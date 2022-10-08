<?php  
         
namespace App\Application\Hackthon\DiaEventoBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonDiaEventoBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonDiaEventoBundle';
    }
}