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
     */
    private ?string $displayAppInformationRequiredState;

    /**
     * Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from.
     */
    private ?string $displayLocationInformationRequiredState;

    public function getDisplayAppInformationRequiredState(): ?string
    {
        return $this->displayAppInformationRequiredState;
    }

    public function setDisplayAppInformationRequiredState(?string $displayAppInformationRequiredState): self
    {
        $this->displayAppInformationRequiredState = $displayAppInformationRequiredState;
        return $this;
    }

    public function getDisplayLocationInformationRequiredState(): ?string
    {
        return $this->displayLocationInformationRequiredState;
    }

    public function setDisplayLocationInformationRequiredState(?string $displayLocationInformationRequiredState): self
    {
        $this->displayLocationInformationRequiredState = $displayLocationInformationRequiredState;
        return $this;
    }

}
