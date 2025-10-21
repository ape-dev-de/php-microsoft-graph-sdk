<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAcronym
 */
class SearchAcronym
{
    /**
     * What the acronym stands for.
     */
    private ?string $standsFor;

    /**
     */
    private ?string $state;


    public function getStandsFor(): ?string
    {
        return $this->standsFor;
    }

    public function setStandsFor(?string $standsFor): self
    {
        $this->standsFor = $standsFor;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
