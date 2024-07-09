<?php

namespace Seat\Eseye\Access;

use Seat\Eseye\Containers\EsiAuthentication;

interface AccessTokenRefresherInterface
{
    public function getValidAccessToken(EsiAuthentication $authentication): EsiAuthentication;
}