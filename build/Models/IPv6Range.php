<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv6Range
 */
class IPv6Range
{
    /**
     * Lower address.
     */
    private ?string $lowerAddress;

    /**
     * IPv6 Range definition.
     */
    private ?string $upperAddress;

    public function getLowerAddress(): ?string
    {
        return $this->lowerAddress;
    }

    public function setLowerAddress(?string $lowerAddress): self
    {
        $this->lowerAddress = $lowerAddress;
        return $this;
    }

    public function getUpperAddress(): ?string
    {
        return $this->upperAddress;
    }

    public function setUpperAddress(?string $upperAddress): self
    {
        $this->upperAddress = $upperAddress;
        return $this;
    }

}
