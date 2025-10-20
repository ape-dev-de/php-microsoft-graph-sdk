<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceSettingState
 */
class DeviceComplianceSettingState
{
    /**
     * The DateTime when device compliance grace period expires
     */
    private ?\DateTimeInterface $complianceGracePeriodExpirationDateTime;

    /**
     * The Device Id that is being reported
     */
    private ?string $deviceId;

    /**
     * The device model that is being reported
     */
    private ?string $deviceModel;

    /**
     * The Device Name that is being reported
     */
    private ?string $deviceName;

    /**
     * The setting class name and property name.
     */
    private ?string $setting;

    /**
     * The Setting Name that is being reported
     */
    private ?string $settingName;

    /**
     */
    private ?string $state;

    /**
     * The User email address that is being reported
     */
    private ?string $userEmail;

    /**
     * The user Id that is being reported
     */
    private ?string $userId;

    /**
     * The User Name that is being reported
     */
    private ?string $userName;

    /**
     * Device compliance setting State for a given device.
     */
    private ?string $userPrincipalName;

    public function getComplianceGracePeriodExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    public function setComplianceGracePeriodExpirationDateTime(?\DateTimeInterface $complianceGracePeriodExpirationDateTime): self
    {
        $this->complianceGracePeriodExpirationDateTime = $complianceGracePeriodExpirationDateTime;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getDeviceModel(): ?string
    {
        return $this->deviceModel;
    }

    public function setDeviceModel(?string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
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
