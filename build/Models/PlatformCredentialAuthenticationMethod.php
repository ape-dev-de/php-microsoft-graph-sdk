<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlatformCredentialAuthenticationMethod
 */
class PlatformCredentialAuthenticationMethod
{
    /**
     * The date and time that this Platform Credential Key was registered.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the device on which Platform Credential is registered.
     */
    private ?string $displayName;

    /**
     * Key strength of this Platform Credential key. Possible values are: normal, weak, unknown.
     */
    private ?string $keyStrength;

    /**
     * Platform on which this Platform Credential key is present. Possible values are: unknown, windows, macOS,iOS, android, linux.
     */
    private ?string $platform;

    /**
     * The registered device on which this Platform Credential resides. Supports $expand. When you get a user''s Platform Credential registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/platformCredentialAuthenticationMethod/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getKeyStrength(): ?string
    {
        return $this->keyStrength;
    }

    public function setKeyStrength(?string $keyStrength): self
    {
        $this->keyStrength = $keyStrength;
        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
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
