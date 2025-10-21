<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEvent
 */
class SimulationEvent
{
    /**
     * Count of the simulation event occurrence in an attack simulation and training campaign.
     */
    private ?float $count;

    /**
     * Name of the simulation event in an attack simulation and training campaign.
     */
    private ?string $eventName;


    public function getCount(): ?float
    {
        return $this->count;
    }

    public function setCount(?float $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(?string $eventName): self
    {
        $this->eventName = $eventName;
        return $this;
    }

}
