<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateWindowsDeviceAccountActionParameter
 */
class UpdateWindowsDeviceAccountActionParameter
{
    /**
     * Not yet documented
     */
    private ?bool $calendarSyncEnabled;

    /**
     * Not yet documented
     */
    private ?string $deviceAccount;

    /**
     * Not yet documented
     */
    private ?string $deviceAccountEmail;

    /**
     * Not yet documented
     */
    private ?string $exchangeServer;

    /**
     * Not yet documented
     */
    private ?bool $passwordRotationEnabled;

    /**
     * Not yet documented
     */
    private ?string $sessionInitiationProtocalAddress;

    public function getCalendarSyncEnabled(): ?bool
    {
        return $this->calendarSyncEnabled;
    }

    public function setCalendarSyncEnabled(?bool $calendarSyncEnabled): self
    {
        $this->calendarSyncEnabled = $calendarSyncEnabled;
        return $this;
    }

    public function getDeviceAccount(): ?string
    {
        return $this->deviceAccount;
    }

    public function setDeviceAccount(?string $deviceAccount): self
    {
        $this->deviceAccount = $deviceAccount;
        return $this;
    }

    public function getDeviceAccountEmail(): ?string
    {
        return $this->deviceAccountEmail;
    }

    public function setDeviceAccountEmail(?string $deviceAccountEmail): self
    {
        $this->deviceAccountEmail = $deviceAccountEmail;
        return $this;
    }

    public function getExchangeServer(): ?string
    {
        return $this->exchangeServer;
    }

    public function setExchangeServer(?string $exchangeServer): self
    {
        $this->exchangeServer = $exchangeServer;
        return $this;
    }

    public function getPasswordRotationEnabled(): ?bool
    {
        return $this->passwordRotationEnabled;
    }

    public function setPasswordRotationEnabled(?bool $passwordRotationEnabled): self
    {
        $this->passwordRotationEnabled = $passwordRotationEnabled;
        return $this;
    }

    public function getSessionInitiationProtocalAddress(): ?string
    {
        return $this->sessionInitiationProtocalAddress;
    }

    public function setSessionInitiationProtocalAddress(?string $sessionInitiationProtocalAddress): self
    {
        $this->sessionInitiationProtocalAddress = $sessionInitiationProtocalAddress;
        return $this;
    }

}
