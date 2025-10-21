<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingAvailabilityStatus resources
 *
 * Available select fields:
 */
class TrainingAvailabilityStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingAvailabilityStatus
     */

    /**
     * Select specific TrainingAvailabilityStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
