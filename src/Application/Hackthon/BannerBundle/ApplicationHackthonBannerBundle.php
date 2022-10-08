<?php  
         
namespace App\Application\Hackthon\BannerBundle;
                
use Symfony\Component\HttpKernel\Bundle\Bundle;
                
class ApplicationHackthonBannerBundle extends Bundle
{
    /**
    * {@inheritdoc}
    */
    public function getParent()
    {
        return 'ApplicationHackthonBannerBundle';
    }
}