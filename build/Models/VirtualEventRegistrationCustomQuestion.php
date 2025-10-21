<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationCustomQuestion
 */
class VirtualEventRegistrationCustomQuestion
{
    public function __construct(
        /** @var string[] Answer choices when answerInputType is singleChoice or multiChoice. */
        public array $answerChoices = [],
        /** Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue. */
        public ?string $answerInputType = null
    ) {}
}
