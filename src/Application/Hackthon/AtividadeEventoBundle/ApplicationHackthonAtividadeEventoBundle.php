<?php  
         
namespace App\Application\Hackthon\AtividadeEventoBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonAtividadeEventoBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonAtividadeEventoBundle';
    }
}