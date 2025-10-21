<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingLanguageDetail resources
 *
 * Available select fields:
 */
class TrainingLanguageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingLanguageDetail
     */

    /**
     * Select specific TrainingLanguageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
