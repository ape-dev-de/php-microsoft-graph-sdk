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
     * @var string[]
     */
    private array $receivers = [];

    /**
     */
    private ?string $routingMode;

    /**
     * List of source participant ids.
     * @var string[]
     */
    private array $sources = [];


    /**
     * @return string[]
     */
    public function getReceivers(): array
    {
        return $this->receivers;
    }

    /**
     * @param string[] $receivers
     */
    public function setReceivers(array $receivers): self
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

    /**
     * @return string[]
     */
    public function getSources(): array
    {
        return $this->sources;
    }

    /**
     * @param string[] $sources
     */
    public function setSources(array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

}
