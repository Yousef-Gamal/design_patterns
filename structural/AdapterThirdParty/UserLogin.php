<?php

namespace structural\AdapterThirdParty;

use BasicAuth\BasicAuthorization;

class UserLogin
{
    public function __Construct(public Authenticator $authenticator){}
    public function login(array $params): string
    {
        return $this->authenticator->login($params);
    }
}