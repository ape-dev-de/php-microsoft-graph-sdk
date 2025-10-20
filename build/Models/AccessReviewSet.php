<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewSet
 */
class AccessReviewSet
{
    /**
     * Represents the template and scheduling for an access review.
     */
    private array $definitions = [];

    /**
     * Represents a collection of access review history data and the scopes used to collect that data.
     */
    private ?string $historyDefinitions;

    public function getDefinitions(): array
    {
        return $this->definitions;
    }

    public function setDefinitions(array $definitions): self
    {
        $this->definitions = $definitions;
        return $this;
    }

    public function getHistoryDefinitions(): ?string
    {
        return $this->historyDefinitions;
    }

    public function setHistoryDefinitions(?string $historyDefinitions): self
    {
        $this->historyDefinitions = $historyDefinitions;
        return $this;
    }

}
