<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAssignment
 */
class BookingQuestionAssignment
{
    public function __construct(
        /** Indicates whether it's mandatory to answer the custom question. */
        public ?bool $isRequired = null,
        /** The ID of the custom question. */
        public ?string $questionId = null
    ) {}
}
