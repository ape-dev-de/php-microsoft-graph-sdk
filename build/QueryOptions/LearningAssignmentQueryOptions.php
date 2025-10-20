<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningAssignment resources
 *
 * Available select fields:
 * - assignedDateTime
 * - assignerUserId
 * - assignmentType
 * - dueDateTime
 * - notes
 */
class LearningAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_DATE_TIME = 'assignedDateTime';
    public const FIELD_ASSIGNER_USER_ID = 'assignerUserId';
    public const FIELD_ASSIGNMENT_TYPE = 'assignmentType';
    public const FIELD_DUE_DATE_TIME = 'dueDateTime';
    public const FIELD_NOTES = 'notes';

    /**
     * Select specific LearningAssignment properties
     * 
     * @param array<string> $select Use LearningAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
