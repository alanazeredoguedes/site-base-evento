<?php  
         
namespace App\Application\Hackthon\FaleConoscoBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonFaleConoscoBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonFaleConoscoBundle';
    }
}