<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileHash
 */
class SecurityFileHash
{
    /**
     */
    private ?string $algorithm;

    /**
     * The hash value.
     */
    private ?string $value;

    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }

    public function setAlgorithm(?string $algorithm): self
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
