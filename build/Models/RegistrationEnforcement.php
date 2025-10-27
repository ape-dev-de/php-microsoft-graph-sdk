<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistrationEnforcement
 */
class RegistrationEnforcement
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Run campaigns to remind users to set up targeted authentication methods.
     * @var AuthenticationMethodsRegistrationCampaign|\stdClass|null
     */
    public AuthenticationMethodsRegistrationCampaign|\stdClass|null $authenticationMethodsRegistrationCampaign = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authenticationMethodsRegistrationCampaign'])) {
            $this->authenticationMethodsRegistrationCampaign = is_array($data['authenticationMethodsRegistrationCampaign']) ? new AuthenticationMethodsRegistrationCampaign($data['authenticationMethodsRegistrationCampaign']) : $data['authenticationMethodsRegistrationCampaign'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
