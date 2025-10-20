<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ToneInfo
 */
class ToneInfo
{
    /**
     * An incremental identifier used for ordering DTMF events.
     */
    private ?float $sequenceId;

    /**
     */
    private ?string $tone;

    public function getSequenceId(): ?float
    {
        return $this->sequenceId;
    }

    public function setSequenceId(?float $sequenceId): self
    {
        $this->sequenceId = $sequenceId;
        return $this;
    }

    public function getTone(): ?string
    {
        return $this->tone;
    }

    public function setTone(?string $tone): self
    {
        $this->tone = $tone;
        return $this;
    }

}
