<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistrationEnforcement
 */
class RegistrationEnforcement
{
    /** 
     * Run campaigns to remind users to set up targeted authentication methods.
     * @var AuthenticationMethodsRegistrationCampaign|\stdClass|null
     */
    public mixed $authenticationMethodsRegistrationCampaign = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['authenticationMethodsRegistrationCampaign'])) {
            $this->authenticationMethodsRegistrationCampaign = $data['authenticationMethodsRegistrationCampaign'];
        }
    }
}
