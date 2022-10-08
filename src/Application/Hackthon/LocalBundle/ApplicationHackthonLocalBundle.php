<?php  
         
namespace App\Application\Hackthon\LocalBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonLocalBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonLocalBundle';
    }
}