<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingType resources
 *
 * Available select fields:
 */
class TrainingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingType
     */

    /**
     * Select specific TrainingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
