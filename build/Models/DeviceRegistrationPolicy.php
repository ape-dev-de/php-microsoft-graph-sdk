<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationPolicy
 */
class DeviceRegistrationPolicy
{
    /**
     */
    private ?string $azureADJoin;

    /**
     */
    private ?string $azureADRegistration;

    /**
     */
    private ?string $description;

    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $localAdminPassword;

    /**
     */
    private ?string $multiFactorAuthConfiguration;

    /**
     */
    private ?string $userDeviceQuota;


    public function getAzureADJoin(): ?string
    {
        return $this->azureADJoin;
    }

    public function setAzureADJoin(?string $azureADJoin): self
    {
        $this->azureADJoin = $azureADJoin;
        return $this;
    }

    public function getAzureADRegistration(): ?string
    {
        return $this->azureADRegistration;
    }

    public function setAzureADRegistration(?string $azureADRegistration): self
    {
        $this->azureADRegistration = $azureADRegistration;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getLocalAdminPassword(): ?string
    {
        return $this->localAdminPassword;
    }

    public function setLocalAdminPassword(?string $localAdminPassword): self
    {
        $this->localAdminPassword = $localAdminPassword;
        return $this;
    }

    public function getMultiFactorAuthConfiguration(): ?string
    {
        return $this->multiFactorAuthConfiguration;
    }

    public function setMultiFactorAuthConfiguration(?string $multiFactorAuthConfiguration): self
    {
        $this->multiFactorAuthConfiguration = $multiFactorAuthConfiguration;
        return $this;
    }

    public function getUserDeviceQuota(): ?string
    {
        return $this->userDeviceQuota;
    }

    public function setUserDeviceQuota(?string $userDeviceQuota): self
    {
        $this->userDeviceQuota = $userDeviceQuota;
        return $this;
    }

}
