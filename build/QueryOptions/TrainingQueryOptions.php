<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Training resources
 *
 * Available select fields:
 */
class TrainingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Training
     */

    /**
     * Select specific Training properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
