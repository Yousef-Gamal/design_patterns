<?php

namespace BasicAuth;

class BasicAuthorization
{
    public function basicAuth(string $username,string $password): string{
        return $username . '-' . $password;
    }
}