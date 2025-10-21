<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationCustomQuestion
 */
class VirtualEventRegistrationCustomQuestion
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Display name of the registration question. */
        public ?string $displayName = null,
        /** Indicates whether an answer to the question is required. The default value is false. */
        public ?bool $isRequired = null,
        /** @var string[] Answer choices when answerInputType is singleChoice or multiChoice. */
        public array $answerChoices = [],
        /** Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue. */
        public ?string $answerInputType = null
    ) {}
}
