<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftTrainingAssignmentMapping resources
 *
 * Available select fields:
 * - assignedTo
 * - training
 */
class MicrosoftTrainingAssignmentMappingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftTrainingAssignmentMapping
     */
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_TRAINING = 'training';

    /**
     * Select specific MicrosoftTrainingAssignmentMapping properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
