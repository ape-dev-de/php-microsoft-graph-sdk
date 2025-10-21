<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCustomConfiguration
 */
class MacOSCustomConfiguration
{
    /**
     * Payload. (UTF8 encoded byte array)
     */
    private ?string $payload;

    /**
     * Payload file name (.mobileconfig
     */
    private ?string $payloadFileName;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSCustomConfiguration resource.
     */
    private ?string $payloadName;


    public function getPayload(): ?string
    {
        return $this->payload;
    }

    public function setPayload(?string $payload): self
    {
        $this->payload = $payload;
        return $this;
    }

    public function getPayloadFileName(): ?string
    {
        return $this->payloadFileName;
    }

    public function setPayloadFileName(?string $payloadFileName): self
    {
        $this->payloadFileName = $payloadFileName;
        return $this;
    }

    public function getPayloadName(): ?string
    {
        return $this->payloadName;
    }

    public function setPayloadName(?string $payloadName): self
    {
        $this->payloadName = $payloadName;
        return $this;
    }

}
