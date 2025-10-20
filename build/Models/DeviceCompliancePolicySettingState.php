<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicySettingState
 */
class DeviceCompliancePolicySettingState
{
    /**
     * Current value of setting on device
     */
    private ?string $currentValue;

    /**
     * Error code for the setting
     */
    private ?float $errorCode;

    /**
     * Error description
     */
    private ?string $errorDescription;

    /**
     * Name of setting instance that is being reported.
     */
    private ?string $instanceDisplayName;

    /**
     * The setting that is being reported
     */
    private ?string $setting;

    /**
     * Localized/user friendly setting name that is being reported
     */
    private ?string $settingName;

    /**
     * Contributing policies
     */
    private array $sources = [];

    /**
     */
    private ?string $state;

    /**
     * UserEmail
     */
    private ?string $userEmail;

    /**
     * UserId
     */
    private ?string $userId;

    /**
     * UserName
     */
    private ?string $userName;

    /**
     * Device Compilance Policy Setting State for a given device.
     */
    private ?string $userPrincipalName;

    public function getCurrentValue(): ?string
    {
        return $this->currentValue;
    }

    public function setCurrentValue(?string $currentValue): self
    {
        $this->currentValue = $currentValue;
        return $this;
    }

    public function getErrorCode(): ?float
    {
        return $this->errorCode;
    }

    public function setErrorCode(?float $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    public function setErrorDescription(?string $errorDescription): self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }

    public function getInstanceDisplayName(): ?string
    {
        return $this->instanceDisplayName;
    }

    public function setInstanceDisplayName(?string $instanceDisplayName): self
    {
        $this->instanceDisplayName = $instanceDisplayName;
        return $this;
    }

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;
        return $this;
    }

    public function getSettingName(): ?string
    {
        return $this->settingName;
    }

    public function setSettingName(?string $settingName): self
    {
        $this->settingName = $settingName;
        return $this;
    }

    public function getSources(): array
    {
        return $this->sources;
    }

    public function setSources(array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
