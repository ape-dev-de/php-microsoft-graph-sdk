<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RedirectUriSettings
 */
class RedirectUriSettings
{
    /**
     */
    private ?float $index;

    /**
     */
    private ?string $uri;


    public function getIndex(): ?float
    {
        return $this->index;
    }

    public function setIndex(?float $index): self
    {
        $this->index = $index;
        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

}
