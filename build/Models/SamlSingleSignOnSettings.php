<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlSingleSignOnSettings
 */
class SamlSingleSignOnSettings
{
    /**
     * The relative URI the service provider would redirect to after completion of the single sign-on flow.
     */
    private ?string $relayState;


    public function getRelayState(): ?string
    {
        return $this->relayState;
    }

    public function setRelayState(?string $relayState): self
    {
        $this->relayState = $relayState;
        return $this;
    }

}
