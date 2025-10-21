<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskTrigger
 */
class PrintTaskTrigger
{
    /**
     */
    private ?string $event;

    /**
     */
    private ?string $definition;


    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(?string $event): self
    {
        $this->event = $event;
        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): self
    {
        $this->definition = $definition;
        return $this;
    }

}
