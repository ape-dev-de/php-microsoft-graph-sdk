<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MoveAction
 */
class MoveAction
{
    /**
     * The name of the location the item was moved from.
     */
    private ?string $from;

    /**
     * The name of the location the item was moved to.
     */
    private ?string $to;


    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): self
    {
        $this->from = $from;
        return $this;
    }

    public function getTo(): ?string
    {
        return $this->to;
    }

    public function setTo(?string $to): self
    {
        $this->to = $to;
        return $this;
    }

}
