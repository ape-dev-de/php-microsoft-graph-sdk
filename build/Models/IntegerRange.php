<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegerRange
 */
class IntegerRange
{
    /**
     * The inclusive upper bound of the integer range.
     */
    private ?float $end;

    /**
     * The inclusive lower bound of the integer range.
     */
    private ?string $start;

    public function getEnd(): ?float
    {
        return $this->end;
    }

    public function setEnd(?float $end): self
    {
        $this->end = $end;
        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

}
