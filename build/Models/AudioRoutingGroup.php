<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioRoutingGroup
 */
class AudioRoutingGroup
{
    /**
     * List of receiving participant ids.
     */
    private ?string $receivers;

    /**
     */
    private ?string $routingMode;

    /**
     * List of source participant ids.
     */
    private ?string $sources;

    public function getReceivers(): ?string
    {
        return $this->receivers;
    }

    public function setReceivers(?string $receivers): self
    {
        $this->receivers = $receivers;
        return $this;
    }

    public function getRoutingMode(): ?string
    {
        return $this->routingMode;
    }

    public function setRoutingMode(?string $routingMode): self
    {
        $this->routingMode = $routingMode;
        return $this;
    }

    public function getSources(): ?string
    {
        return $this->sources;
    }

    public function setSources(?string $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

}
