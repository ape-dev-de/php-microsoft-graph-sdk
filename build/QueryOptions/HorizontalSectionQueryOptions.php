<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSection resources
 *
 * Available select fields:
 */
class HorizontalSectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HorizontalSection
     */

    /**
     * Select specific HorizontalSection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
