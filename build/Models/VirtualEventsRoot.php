<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventsRoot
 */
class VirtualEventsRoot
{
    /**
     */
    private array $events = [];

    /**
     * A collection of town halls. Nullable.
     */
    private array $townhalls = [];

    /**
     * A collection of webinars. Nullable.
     * @var string[]
     */
    private array $webinars = [];


    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): self
    {
        $this->events = $events;
        return $this;
    }

    public function getTownhalls(): array
    {
        return $this->townhalls;
    }

    public function setTownhalls(array $townhalls): self
    {
        $this->townhalls = $townhalls;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebinars(): array
    {
        return $this->webinars;
    }

    /**
     * @param string[] $webinars
     */
    public function setWebinars(array $webinars): self
    {
        $this->webinars = $webinars;
        return $this;
    }

}
