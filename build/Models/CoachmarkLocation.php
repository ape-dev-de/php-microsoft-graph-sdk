<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CoachmarkLocation
 */
class CoachmarkLocation
{
    /**
     * Length of coachmark.
     */
    private ?float $length;

    /**
     * Offset of coachmark.
     */
    private ?float $offset;

    /**
     * Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
     */
    private ?string $type;


    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;
        return $this;
    }

    public function getOffset(): ?float
    {
        return $this->offset;
    }

    public function setOffset(?float $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
