<?php

namespace structural\AdapterThirdParty;

use BasicAuth\BasicAuthorization;

class BasicAuthAdapter implements Authenticator
{
    public function __Construct(private BasicAuthorization $authenticator){}
    public function login(array $params): string{
        return $this->authenticator->basicAuth($params['username'],$params['password']);
    }
}