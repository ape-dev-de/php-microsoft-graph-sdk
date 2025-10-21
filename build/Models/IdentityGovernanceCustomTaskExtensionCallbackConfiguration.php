<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackConfiguration
 */
class IdentityGovernanceCustomTaskExtensionCallbackConfiguration
{
    /**
     * @var string[]
     */
    private array $authorizedApps = [];


    /**
     * @return string[]
     */
    public function getAuthorizedApps(): array
    {
        return $this->authorizedApps;
    }

    /**
     * @param string[] $authorizedApps
     */
    public function setAuthorizedApps(array $authorizedApps): self
    {
        $this->authorizedApps = $authorizedApps;
        return $this;
    }

}
