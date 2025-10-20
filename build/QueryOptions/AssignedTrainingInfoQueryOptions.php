<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedTrainingInfo resources
 *
 * Available select fields:
 * - assignedUserCount
 * - completedUserCount
 * - displayName
 */
class AssignedTrainingInfoQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_USER_COUNT = 'assignedUserCount';
    public const FIELD_COMPLETED_USER_COUNT = 'completedUserCount';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AssignedTrainingInfo properties
     * 
     * @param array<string> $select Use AssignedTrainingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
