<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningProvider resources
 *
 * Available select fields:
 */
class LearningProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningProvider
     */

    /**
     * Select specific LearningProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
