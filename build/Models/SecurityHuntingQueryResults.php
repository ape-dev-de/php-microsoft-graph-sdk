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
     * @var string[]
     */
    private array $schema = [];


    public function getResults(): array
    {
        return $this->results;
    }

    public function setResults(array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSchema(): array
    {
        return $this->schema;
    }

    /**
     * @param string[] $schema
     */
    public function setSchema(array $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

}
