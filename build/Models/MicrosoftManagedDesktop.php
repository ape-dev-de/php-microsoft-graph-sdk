<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftManagedDesktop
 */
class MicrosoftManagedDesktop
{
    /**
     * Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged.
     */
    private ?string $managedType;

    /**
     * The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
     */
    private ?string $profile;

    public function getManagedType(): ?string
    {
        return $this->managedType;
    }

    public function setManagedType(?string $managedType): self
    {
        $this->managedType = $managedType;
        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): self
    {
        $this->profile = $profile;
        return $this;
    }

}
