<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIpEvidence
 */
class SecurityIpEvidence
{
    /**
     * The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc.
     */
    private ?string $countryLetterCode;

    /**
     * The value of the IP Address, can be either in V4 address or V6 address format.
     */
    private ?string $ipAddress;

    /**
     */
    private ?string $location;

    /**
     */
    private ?string $stream;


    public function getCountryLetterCode(): ?string
    {
        return $this->countryLetterCode;
    }

    public function setCountryLetterCode(?string $countryLetterCode): self
    {
        $this->countryLetterCode = $countryLetterCode;
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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function setStream(?string $stream): self
    {
        $this->stream = $stream;
        return $this;
    }

}
