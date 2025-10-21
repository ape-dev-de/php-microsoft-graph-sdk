<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsHelloForBusinessAuthenticationMethod
 */
class WindowsHelloForBusinessAuthenticationMethod
{
    /**
     * The date and time that this Windows Hello for Business key was registered.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the device on which Windows Hello for Business is registered
     */
    private ?string $displayName;

    /**
     * Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
     */
    private ?string $keyStrength;

    /**
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user''s Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
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
