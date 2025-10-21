<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InferenceClassification
 */
class InferenceClassification
{
    /**
     * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @var string[]
     */
    private array $overrides = [];


    /**
     * @return string[]
     */
    public function getOverrides(): array
    {
        return $this->overrides;
    }

    /**
     * @param string[] $overrides
     */
    public function setOverrides(array $overrides): self
    {
        $this->overrides = $overrides;
        return $this;
    }

}
