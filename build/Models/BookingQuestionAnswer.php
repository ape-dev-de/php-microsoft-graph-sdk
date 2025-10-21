<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAnswer
 */
class BookingQuestionAnswer
{
    public function __construct(
        /** The answer given by the user in case the answerInputType is text. */
        public ?string $answer = null,
        /** The expected answer type. The possible values are: text, radioButton, unknownFutureValue. */
        public ?AnswerInputType $answerInputType = null,
        /** @var string[] In case the answerInputType is radioButton, this will consists of a list of possible answer values. */
        public array $answerOptions = [],
        /** Indicates whether it is mandatory to answer the custom question. */
        public ?bool $isRequired = null,
        /** The question. */
        public ?string $question = null,
        /** The ID of the custom question. */
        public ?string $questionId = null,
        /** @var string[] The answers selected by the user. */
        public array $selectedOptions = []
    ) {}
}
