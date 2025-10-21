<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidCustomConfiguration resources
 *
 * Available select fields:
 */
class AndroidCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidCustomConfiguration
     */

    /**
     * Select specific AndroidCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
