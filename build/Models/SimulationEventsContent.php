<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationEventsContent
 */
class SimulationEventsContent
{
    /**
     * Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign.
     */
    private ?string $compromisedRate;

    /**
     * List of simulation events in an attack simulation and training campaign.
     */
    private ?string $events;

    public function getCompromisedRate(): ?string
    {
        return $this->compromisedRate;
    }

    public function setCompromisedRate(?string $compromisedRate): self
    {
        $this->compromisedRate = $compromisedRate;
        return $this;
    }

    public function getEvents(): ?string
    {
        return $this->events;
    }

    public function setEvents(?string $events): self
    {
        $this->events = $events;
        return $this;
    }

}
