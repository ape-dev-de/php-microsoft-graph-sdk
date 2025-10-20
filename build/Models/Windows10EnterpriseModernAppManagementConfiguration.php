<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EnterpriseModernAppManagementConfiguration
 */
class Windows10EnterpriseModernAppManagementConfiguration
{
    /**
     * Windows10 Enterprise Modern App Management Configuration.
     */
    private ?string $uninstallBuiltInApps;

    public function getUninstallBuiltInApps(): ?string
    {
        return $this->uninstallBuiltInApps;
    }

    public function setUninstallBuiltInApps(?string $uninstallBuiltInApps): self
    {
        $this->uninstallBuiltInApps = $uninstallBuiltInApps;
        return $this;
    }

}
