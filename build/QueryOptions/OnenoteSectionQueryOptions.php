<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteSection resources
 *
 * Available select fields:
 */
class OnenoteSectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteSection
     */

    /**
     * Select specific OnenoteSection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
