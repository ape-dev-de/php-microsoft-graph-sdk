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
     */
    private ?string $queries;

    public function getQueries(): ?string
    {
        return $this->queries;
    }

    public function setQueries(?string $queries): self
    {
        $this->queries = $queries;
        return $this;
    }

}
