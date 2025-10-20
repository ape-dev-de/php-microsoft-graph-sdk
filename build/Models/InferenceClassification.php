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
     */
    private ?string $overrides;

    public function getOverrides(): ?string
    {
        return $this->overrides;
    }

    public function setOverrides(?string $overrides): self
    {
        $this->overrides = $overrides;
        return $this;
    }

}
