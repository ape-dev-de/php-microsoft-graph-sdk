<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingContentEventInfo
 */
class UserTrainingContentEventInfo
{
    /**
     * Browser of the user from where the training event was generated.
     */
    private ?string $browser;

    /**
     * Date and time of the training content playback by the user.
     */
    private ?\DateTimeInterface $contentDateTime;

    /**
     * IP address of the user for the training event.
     */
    private ?string $ipAddress;

    /**
     * The operating system, platform, and device details of the user for the training event.
     */
    private ?string $osPlatformDeviceDetails;

    /**
     * Potential improvement in the tenant security posture after completion of the training by the user.
     */
    private ?string $potentialScoreImpact;


    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    public function setBrowser(?string $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    public function getContentDateTime(): ?\DateTimeInterface
    {
        return $this->contentDateTime;
    }

    public function setContentDateTime(?\DateTimeInterface $contentDateTime): self
    {
        $this->contentDateTime = $contentDateTime;
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

    public function getPotentialScoreImpact(): ?string
    {
        return $this->potentialScoreImpact;
    }

    public function setPotentialScoreImpact(?string $potentialScoreImpact): self
    {
        $this->potentialScoreImpact = $potentialScoreImpact;
        return $this;
    }

}
