<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingQuestionAssignment resources
 *
 * Available select fields:
 * - isRequired
 * - questionId
 */
class BookingQuestionAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_QUESTION_ID = 'questionId';

    /**
     * Select specific BookingQuestionAssignment properties
     * 
     * @param array<string> $select Use BookingQuestionAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
