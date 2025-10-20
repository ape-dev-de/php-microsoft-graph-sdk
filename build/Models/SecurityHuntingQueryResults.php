<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHuntingQueryResults
 */
class SecurityHuntingQueryResults
{
    /**
     * The results of the hunting query.
     */
    private array $results = [];

    /**
     * The schema for the response.
     */
    private ?string $schema;

    public function getResults(): array
    {
        return $this->results;
    }

    public function setResults(array $results): self
    {
        $this->results = $results;
        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

}
