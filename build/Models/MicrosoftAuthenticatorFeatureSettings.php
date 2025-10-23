<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorFeatureSettings
 */
class MicrosoftAuthenticatorFeatureSettings
{
    /** 
     * Determines whether the user's Authenticator app shows them the client app they're signing into.
     * @var AuthenticationMethodFeatureConfiguration|\stdClass|null
     */
    public mixed $displayAppInformationRequiredState = null;

    /** 
     * Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from.
     * @var AuthenticationMethodFeatureConfiguration|\stdClass|null
     */
    public mixed $displayLocationInformationRequiredState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayAppInformationRequiredState'])) {
            $this->displayAppInformationRequiredState = $data['displayAppInformationRequiredState'];
        }
        if (isset($data['displayLocationInformationRequiredState'])) {
            $this->displayLocationInformationRequiredState = $data['displayLocationInformationRequiredState'];
        }
    }
}
