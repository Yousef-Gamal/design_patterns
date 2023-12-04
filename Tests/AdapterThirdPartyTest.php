<?php

namespace Tests;

use BasicAuth\BasicAuthorization;
use PHPUnit\Framework\TestCase;
use structural\AdapterThirdParty\Authenticator;
use structural\AdapterThirdParty\BasicAuthAdapter;
use structural\AdapterThirdParty\TokenAuthAdapter;
use structural\AdapterThirdParty\UserLogin;

class AdapterThirdPartyTest extends TestCase
{
    public function testAuthWithBasicAuthLib()
    {
        $params = [
            'username' => 'Yousef',
            'password' => '1234'
        ];
        $basicAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAdapter->expects($this->once())->method('login')->willReturn('Yousef-1234');
        $user = new UserLogin($basicAdapter);
        $user->login($params);
    }
    public function testAuthWithTokenAuthLib()
    {
        $params = [
            'key' => 'Yousef',
            'token' => '1234'
        ];
        $tokenAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAdapter->expects($this->once())->method('login')->willReturn(base64_encode('Yousef-1234'));
        $user = new UserLogin($tokenAdapter);
        $user->login($params);
    }
}