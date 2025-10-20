<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationQuestionAnswer resources
 *
 * Available select fields:
 * - booleanValue
 * - displayName
 * - multiChoiceValues
 * - questionId
 * - value
 */
class VirtualEventRegistrationQuestionAnswerQueryOptions extends QueryOptions
{
    public const FIELD_BOOLEAN_VALUE = 'booleanValue';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MULTI_CHOICE_VALUES = 'multiChoiceValues';
    public const FIELD_QUESTION_ID = 'questionId';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventRegistrationQuestionAnswer properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationQuestionAnswerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
