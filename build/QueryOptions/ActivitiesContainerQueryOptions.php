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
    /**
     * Available select fields for ActivitiesContainer
     */
    public const FIELD_CONTENT_ACTIVITIES = 'contentActivities';

    /**
     * Select specific ActivitiesContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
