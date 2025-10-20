<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperatingSystemSpecifications
 */
class OperatingSystemSpecifications
{
    /**
     * The platform of the operating system (for example, ''Windows'').
     */
    private ?string $operatingSystemPlatform;

    /**
     * The version string of the operating system.
     */
    private ?string $operatingSystemVersion;

    public function getOperatingSystemPlatform(): ?string
    {
        return $this->operatingSystemPlatform;
    }

    public function setOperatingSystemPlatform(?string $operatingSystemPlatform): self
    {
        $this->operatingSystemPlatform = $operatingSystemPlatform;
        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
        return $this;
    }

}
