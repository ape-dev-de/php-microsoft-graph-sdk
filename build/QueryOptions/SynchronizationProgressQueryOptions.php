<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationProgress resources
 *
 * Available select fields:
 * - completedUnits
 * - progressObservationDateTime
 * - totalUnits
 * - units
 */
class SynchronizationProgressQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationProgress
     */
    public const FIELD_COMPLETED_UNITS = 'completedUnits';
    public const FIELD_PROGRESS_OBSERVATION_DATE_TIME = 'progressObservationDateTime';
    public const FIELD_TOTAL_UNITS = 'totalUnits';
    public const FIELD_UNITS = 'units';

    /**
     * Select specific SynchronizationProgress properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
