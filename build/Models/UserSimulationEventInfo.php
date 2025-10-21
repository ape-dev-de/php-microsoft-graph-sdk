<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationEventInfo
 */
class UserSimulationEventInfo
{
    /**
     * Browser information from where the simulation event was initiated by a user in an attack simulation and training campaign.
     */
    private ?string $browser;

    /**
     */
    private ?string $clickSource;

    /**
     * Date and time of the simulation event by a user in an attack simulation and training campaign.
     */
    private ?\DateTimeInterface $eventDateTime;

    /**
     * Name of the simulation event by a user in an attack simulation and training campaign.
     */
    private ?string $eventName;

    /**
     * IP address from where the simulation event was initiated by a user in an attack simulation and training campaign.
     */
    private ?string $ipAddress;

    /**
     * The operating system, platform, and device details from where the simulation event was initiated by a user in an attack simulation and training campaign.
     */
    private ?string $osPlatformDeviceDetails;


    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    public function setBrowser(?string $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    public function getClickSource(): ?string
    {
        return $this->clickSource;
    }

    public function setClickSource(?string $clickSource): self
    {
        $this->clickSource = $clickSource;
        return $this;
    }

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(?string $eventName): self
    {
        $this->eventName = $eventName;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getOsPlatformDeviceDetails(): ?string
    {
        return $this->osPlatformDeviceDetails;
    }

    public function setOsPlatformDeviceDetails(?string $osPlatformDeviceDetails): self
    {
        $this->osPlatformDeviceDetails = $osPlatformDeviceDetails;
        return $this;
    }

}
