<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertDetection
 */
class AlertDetection
{
    /**
     */
    private ?string $detectionType;

    /**
     */
    private ?string $method;

    /**
     */
    private ?string $name;

    public function getDetectionType(): ?string
    {
        return $this->detectionType;
    }

    public function setDetectionType(?string $detectionType): self
    {
        $this->detectionType = $detectionType;
        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
