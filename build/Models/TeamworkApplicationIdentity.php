<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkApplicationIdentity
 */
class TeamworkApplicationIdentity
{
    /**
     * Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, outgoingWebhook, and unknownFutureValue.
     */
    private ?string $applicationIdentityType;

    public function getApplicationIdentityType(): ?string
    {
        return $this->applicationIdentityType;
    }

    public function setApplicationIdentityType(?string $applicationIdentityType): self
    {
        $this->applicationIdentityType = $applicationIdentityType;
        return $this;
    }

}
