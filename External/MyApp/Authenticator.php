<?php

namespace Application\External\MyApp;

use Application\External\Api\AuthenticatorInterface;

/**
 * Class Authenticator
 * @package Application\External\MyApp
 * @author Felipe de Campos <felipe.campos.programador@gmail.com>
 */
class Authenticator implements AuthenticatorInterface
{

    /**
     * {@inheritdoc}
     */
    public function modifyOptions(array &$options, $data = null)
    {
        $options['headers']['Senha'] = app('myapp.options')['password'];
    }

}
