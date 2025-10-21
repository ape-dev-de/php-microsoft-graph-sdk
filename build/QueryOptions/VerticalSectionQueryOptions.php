<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VerticalSection resources
 *
 * Available select fields:
 */
class VerticalSectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VerticalSection
     */

    /**
     * Select specific VerticalSection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
