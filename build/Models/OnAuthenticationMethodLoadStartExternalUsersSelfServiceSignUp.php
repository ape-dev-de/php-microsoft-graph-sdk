<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
 */
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
{
    /** 
     * 
     * @var IdentityProviderBase[]
     */
    public array $identityProviders = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identityProviders'])) {
            $this->identityProviders = $data['identityProviders'];
        }
    }
}
