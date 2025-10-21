<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionBase
 */
class VirtualEventRegistrationQuestionBase
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Display name of the registration question. */
        public ?string $displayName = null,
        /** Indicates whether an answer to the question is required. The default value is false. */
        public ?bool $isRequired = null
    ) {}
}
