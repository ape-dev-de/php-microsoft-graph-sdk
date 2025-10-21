<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCConfiguration resources
 *
 * Available select fields:
 */
class SharedPCConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedPCConfiguration
     */

    /**
     * Select specific SharedPCConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
