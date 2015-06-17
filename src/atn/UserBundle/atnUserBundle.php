<?php

namespace atn\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class atnUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
