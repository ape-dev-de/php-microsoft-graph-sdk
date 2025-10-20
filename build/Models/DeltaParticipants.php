<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeltaParticipants
 */
class DeltaParticipants
{
    /**
     * The sequence number for the roster update that is used to identify the notification order.
     */
    private ?float $sequenceNumber;

    /**
     * The collection of participants that were updated since the last roster update.
     */
    private ?string $participants;

    public function getSequenceNumber(): ?float
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?float $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    public function getParticipants(): ?string
    {
        return $this->participants;
    }

    public function setParticipants(?string $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

}
