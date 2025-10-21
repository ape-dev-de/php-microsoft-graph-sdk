<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InferenceClassification
 */
class InferenceClassification
{
    public function __construct(
        /** @var string[] A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable. */
        public array $overrides = []
    ) {}
}
