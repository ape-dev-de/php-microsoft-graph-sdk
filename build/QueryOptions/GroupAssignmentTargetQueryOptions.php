<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupAssignmentTarget resources
 *
 * Available select fields:
 * - groupId
 */
class GroupAssignmentTargetQueryOptions extends QueryOptions
{
    public const FIELD_GROUP_ID = 'groupId';

    /**
     * Select specific GroupAssignmentTarget properties
     * 
     * @param array<string> $select Use GroupAssignmentTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
