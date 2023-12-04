<?php

namespace structural\AdapterThirdParty;

interface Authenticator
{
    public function login(array $params);
}