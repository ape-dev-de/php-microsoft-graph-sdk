<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingStatus resources
 *
 * Available select fields:
 */
class TrainingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingStatus
     */

    /**
     * Select specific TrainingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
