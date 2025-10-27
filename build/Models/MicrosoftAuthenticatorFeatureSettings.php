<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorFeatureSettings
 */
class MicrosoftAuthenticatorFeatureSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Determines whether the user's Authenticator app shows them the client app they're signing into.
     * @var AuthenticationMethodFeatureConfiguration|\stdClass|null
     */
    public AuthenticationMethodFeatureConfiguration|\stdClass|null $displayAppInformationRequiredState = null;

    /** 
     * Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from.
     * @var AuthenticationMethodFeatureConfiguration|\stdClass|null
     */
    public AuthenticationMethodFeatureConfiguration|\stdClass|null $displayLocationInformationRequiredState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayAppInformationRequiredState'])) {
            $this->displayAppInformationRequiredState = is_array($data['displayAppInformationRequiredState']) ? new AuthenticationMethodFeatureConfiguration($data['displayAppInformationRequiredState']) : $data['displayAppInformationRequiredState'];
        }
        if (isset($data['displayLocationInformationRequiredState'])) {
            $this->displayLocationInformationRequiredState = is_array($data['displayLocationInformationRequiredState']) ? new AuthenticationMethodFeatureConfiguration($data['displayLocationInformationRequiredState']) : $data['displayLocationInformationRequiredState'];
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
