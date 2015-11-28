<?php
namespace Maltronic\Bundle\ConfigSwitcherBundle;

use Maltronic\Bundle\DependencyInjection\Security\Factory\ConfigSwitcherFactory;
use Maltronic\Bundle\ConfigSwitcherBundle\DependencyInjection\Security\Factory\Sw;
use Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * MaltronicConfigSwitcherBundle
 *
 * @author Malcolm Davis <maltronic.email@gmail.com>
*/
class MaltronicConfigSwitcherBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        /** @var SecurityExtension $extension */
        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new ConfigSwitcherFactory());
    }
}
