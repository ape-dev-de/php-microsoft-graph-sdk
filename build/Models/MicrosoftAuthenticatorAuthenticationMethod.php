<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethod
 */
class MicrosoftAuthenticatorAuthenticationMethod
{
    /**
     * The date and time that this app was registered. This property is null if the device isn't registered for passwordless Phone Sign-In.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Tags containing app metadata.
     */
    private ?string $deviceTag;

    /**
     * The name of the device on which this app is registered.
     */
    private ?string $displayName;

    /**
     * Numerical version of this instance of the Authenticator app.
     */
    private ?string $phoneAppVersion;

    /**
     * The registered device on which Microsoft Authenticator resides. This property is null if the device isn't registered for passwordless Phone Sign-In.
     */
    private ?string $device;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeviceTag(): ?string
    {
        return $this->deviceTag;
    }

    public function setDeviceTag(?string $deviceTag): self
    {
        $this->deviceTag = $deviceTag;
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

    public function getPhoneAppVersion(): ?string
    {
        return $this->phoneAppVersion;
    }

    public function setPhoneAppVersion(?string $phoneAppVersion): self
    {
        $this->phoneAppVersion = $phoneAppVersion;
        return $this;
    }

    public function getDevice(): ?string
    {
        return $this->device;
    }

    public function setDevice(?string $device): self
    {
        $this->device = $device;
        return $this;
    }

}
