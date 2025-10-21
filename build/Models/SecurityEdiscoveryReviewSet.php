<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewSet
 */
class SecurityEdiscoveryReviewSet
{
    /**
     * Represents queries within the review set.
     * @var string[]
     */
    private array $queries = [];


    /**
     * @return string[]
     */
    public function getQueries(): array
    {
        return $this->queries;
    }

    /**
     * @param string[] $queries
     */
    public function setQueries(array $queries): self
    {
        $this->queries = $queries;
        return $this;
    }

}
