<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminServiceManagementDetail
 */
class DelegatedAdminServiceManagementDetail
{
    /**
     * The URL of the management portal for the managed service. Read-only.
     */
    private ?string $serviceManagementUrl;

    /**
     * The name of a managed service. Read-only.
     */
    private ?string $serviceName;


    public function getServiceManagementUrl(): ?string
    {
        return $this->serviceManagementUrl;
    }

    public function setServiceManagementUrl(?string $serviceManagementUrl): self
    {
        $this->serviceManagementUrl = $serviceManagementUrl;
        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(?string $serviceName): self
    {
        $this->serviceName = $serviceName;
        return $this;
    }

}
