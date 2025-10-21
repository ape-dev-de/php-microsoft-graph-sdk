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
     */
    private ?string $authenticationMethodsRegistrationCampaign;


    public function getAuthenticationMethodsRegistrationCampaign(): ?string
    {
        return $this->authenticationMethodsRegistrationCampaign;
    }

    public function setAuthenticationMethodsRegistrationCampaign(?string $authenticationMethodsRegistrationCampaign): self
    {
        $this->authenticationMethodsRegistrationCampaign = $authenticationMethodsRegistrationCampaign;
        return $this;
    }

}
