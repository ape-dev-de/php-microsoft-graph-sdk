<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DataSubjectType resources
 *
 * Available select fields:
 */
class DataSubjectTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DataSubjectType
     */

    /**
     * Select specific DataSubjectType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
