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
     * @var string[]
     */
    private array $events = [];


    public function getCompromisedRate(): ?string
    {
        return $this->compromisedRate;
    }

    public function setCompromisedRate(?string $compromisedRate): self
    {
        $this->compromisedRate = $compromisedRate;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param string[] $events
     */
    public function setEvents(array $events): self
    {
        $this->events = $events;
        return $this;
    }

}
