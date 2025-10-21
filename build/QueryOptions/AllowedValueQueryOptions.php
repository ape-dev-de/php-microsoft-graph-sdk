<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedValue resources
 *
 * Available select fields:
 */
class AllowedValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllowedValue
     */

    /**
     * Select specific AllowedValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
