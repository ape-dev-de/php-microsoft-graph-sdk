<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlterationResponse
 */
class AlterationResponse
{
    /**
     * Defines the original user query string.
     */
    private ?string $originalQueryString;

    /**
     * Defines the details of the alteration information for the spelling correction.
     */
    private ?string $queryAlteration;

    /**
     * Defines the type of the spelling correction. Possible values are: suggestion, modification.
     */
    private ?string $queryAlterationType;


    public function getOriginalQueryString(): ?string
    {
        return $this->originalQueryString;
    }

    public function setOriginalQueryString(?string $originalQueryString): self
    {
        $this->originalQueryString = $originalQueryString;
        return $this;
    }

    public function getQueryAlteration(): ?string
    {
        return $this->queryAlteration;
    }

    public function setQueryAlteration(?string $queryAlteration): self
    {
        $this->queryAlteration = $queryAlteration;
        return $this;
    }

    public function getQueryAlterationType(): ?string
    {
        return $this->queryAlterationType;
    }

    public function setQueryAlterationType(?string $queryAlterationType): self
    {
        $this->queryAlterationType = $queryAlterationType;
        return $this;
    }

}
