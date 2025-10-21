<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionAnswer
 */
class VirtualEventRegistrationQuestionAnswer
{
    public function __construct(
        /** Boolean answer of the virtual event registration question. Only appears when answerInputType is boolean. */
        public ?bool $booleanValue = null,
        /** Display name of the registration question. */
        public ?string $displayName = null,
        /** @var string[] Collection of text answer of the virtual event registration question. Only appears when answerInputType is multiChoice. */
        public array $multiChoiceValues = [],
        /** id of the virtual event registration question. */
        public ?string $questionId = null,
        /** Text answer of the virtual event registration question. Appears when answerInputType is text, multilineText or singleChoice. */
        public ?string $value = null
    ) {}
}
