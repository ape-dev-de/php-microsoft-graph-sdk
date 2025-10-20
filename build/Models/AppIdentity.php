<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppIdentity
 */
class AppIdentity
{
    /**
     * Refers to the unique ID representing application in Microsoft Entra ID.
     */
    private ?string $appId;

    /**
     * Refers to the application name displayed in the Microsoft Entra admin center.
     */
    private ?string $displayName;

    /**
     * Refers to the unique ID for the service principal in Microsoft Entra ID.
     */
    private ?string $servicePrincipalId;

    /**
     * Refers to the Service Principal Name is the Application name in the tenant.
     */
    private ?string $servicePrincipalName;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getServicePrincipalId(): ?string
    {
        return $this->servicePrincipalId;
    }

    public function setServicePrincipalId(?string $servicePrincipalId): self
    {
        $this->servicePrincipalId = $servicePrincipalId;
        return $this;
    }

    public function getServicePrincipalName(): ?string
    {
        return $this->servicePrincipalName;
    }

    public function setServicePrincipalName(?string $servicePrincipalName): self
    {
        $this->servicePrincipalName = $servicePrincipalName;
        return $this;
    }

}
