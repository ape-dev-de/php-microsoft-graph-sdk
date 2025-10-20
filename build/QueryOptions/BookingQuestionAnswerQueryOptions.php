<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingQuestionAnswer resources
 *
 * Available select fields:
 * - answer
 * - answerInputType
 * - answerOptions
 * - isRequired
 * - question
 * - questionId
 * - selectedOptions
 */
class BookingQuestionAnswerQueryOptions extends QueryOptions
{
    public const FIELD_ANSWER = 'answer';
    public const FIELD_ANSWER_INPUT_TYPE = 'answerInputType';
    public const FIELD_ANSWER_OPTIONS = 'answerOptions';
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_QUESTION = 'question';
    public const FIELD_QUESTION_ID = 'questionId';
    public const FIELD_SELECTED_OPTIONS = 'selectedOptions';

    /**
     * Select specific BookingQuestionAnswer properties
     * 
     * @param array<string> $select Use BookingQuestionAnswerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
