<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivitiesContainer resources
 *
 * Available select fields:
 * - contentActivities
 */
class ActivitiesContainerQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_ACTIVITIES = 'contentActivities';

    /**
     * Select specific ActivitiesContainer properties
     * 
     * @param array<string> $select Use ActivitiesContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
