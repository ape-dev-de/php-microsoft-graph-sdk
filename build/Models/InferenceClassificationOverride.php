<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InferenceClassificationOverride
 */
class InferenceClassificationOverride
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies how incoming messages from a specific sender should always be classified as. The possible values are: focused, other. */
        public ?string $classifyAs = null,
        /** The email address information of the sender for whom the override is created. */
        public ?string $senderEmailAddress = null
    ) {}
}
