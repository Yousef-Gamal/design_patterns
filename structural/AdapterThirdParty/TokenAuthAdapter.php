<?php

namespace structural\AdapterThirdParty;

use TokenAuth\TokenAuthorization;

class TokenAuthAdapter implements Authenticator
{
    public function __Construct(private TokenAuthorization $authenticator){}
    public function login(array $params): string{
        return $this->authenticator->tokenLogin($params['key'],$params['token']);
    }
}