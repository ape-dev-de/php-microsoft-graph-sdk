<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRoute
 */
class CallRoute
{
    /**
     */
    private ?string $final;

    /**
     */
    private ?string $original;

    /**
     */
    private ?string $routingType;

    public function getFinal(): ?string
    {
        return $this->final;
    }

    public function setFinal(?string $final): self
    {
        $this->final = $final;
        return $this;
    }

    public function getOriginal(): ?string
    {
        return $this->original;
    }

    public function setOriginal(?string $original): self
    {
        $this->original = $original;
        return $this;
    }

    public function getRoutingType(): ?string
    {
        return $this->routingType;
    }

    public function setRoutingType(?string $routingType): self
    {
        $this->routingType = $routingType;
        return $this;
    }

}
