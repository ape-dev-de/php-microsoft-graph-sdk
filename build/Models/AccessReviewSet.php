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
     * @var string[]
     */
    private array $historyDefinitions = [];


    public function getDefinitions(): array
    {
        return $this->definitions;
    }

    public function setDefinitions(array $definitions): self
    {
        $this->definitions = $definitions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHistoryDefinitions(): array
    {
        return $this->historyDefinitions;
    }

    /**
     * @param string[] $historyDefinitions
     */
    public function setHistoryDefinitions(array $historyDefinitions): self
    {
        $this->historyDefinitions = $historyDefinitions;
        return $this;
    }

}
