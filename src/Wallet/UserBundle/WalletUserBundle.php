<?php

namespace Wallet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WalletUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
