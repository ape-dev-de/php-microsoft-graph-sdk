<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDesktopApp
 */
class WindowsInformationProtectionDesktopApp
{
    /**
     * The binary name.
     */
    private ?string $binaryName;

    /**
     * The high binary version.
     */
    private ?string $binaryVersionHigh;

    /**
     * Desktop App for Windows information protection
     */
    private ?string $binaryVersionLow;


    public function getBinaryName(): ?string
    {
        return $this->binaryName;
    }

    public function setBinaryName(?string $binaryName): self
    {
        $this->binaryName = $binaryName;
        return $this;
    }

    public function getBinaryVersionHigh(): ?string
    {
        return $this->binaryVersionHigh;
    }

    public function setBinaryVersionHigh(?string $binaryVersionHigh): self
    {
        $this->binaryVersionHigh = $binaryVersionHigh;
        return $this;
    }

    public function getBinaryVersionLow(): ?string
    {
        return $this->binaryVersionLow;
    }

    public function setBinaryVersionLow(?string $binaryVersionLow): self
    {
        $this->binaryVersionLow = $binaryVersionLow;
        return $this;
    }

}
