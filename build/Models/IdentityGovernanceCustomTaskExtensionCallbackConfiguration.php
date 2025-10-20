<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackConfiguration
 */
class IdentityGovernanceCustomTaskExtensionCallbackConfiguration
{
    /**
     */
    private ?string $authorizedApps;

    public function getAuthorizedApps(): ?string
    {
        return $this->authorizedApps;
    }

    public function setAuthorizedApps(?string $authorizedApps): self
    {
        $this->authorizedApps = $authorizedApps;
        return $this;
    }

}
