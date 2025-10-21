<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdvancedConfigState resources
 *
 * Available select fields:
 */
class AdvancedConfigStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdvancedConfigState
     */

    /**
     * Select specific AdvancedConfigState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
