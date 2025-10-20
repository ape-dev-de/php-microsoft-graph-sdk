<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkConnectionEvidence
 */
class SecurityNetworkConnectionEvidence
{
    /**
     */
    private ?string $destinationAddress;

    /**
     */
    private ?float $destinationPort;

    /**
     */
    private ?string $protocol;

    /**
     */
    private ?string $sourceAddress;

    /**
     */
    private ?string $sourcePort;

    public function getDestinationAddress(): ?string
    {
        return $this->destinationAddress;
    }

    public function setDestinationAddress(?string $destinationAddress): self
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    public function getDestinationPort(): ?float
    {
        return $this->destinationPort;
    }

    public function setDestinationPort(?float $destinationPort): self
    {
        $this->destinationPort = $destinationPort;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getSourceAddress(): ?string
    {
        return $this->sourceAddress;
    }

    public function setSourceAddress(?string $sourceAddress): self
    {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }

    public function getSourcePort(): ?string
    {
        return $this->sourcePort;
    }

    public function setSourcePort(?string $sourcePort): self
    {
        $this->sourcePort = $sourcePort;
        return $this;
    }

}
