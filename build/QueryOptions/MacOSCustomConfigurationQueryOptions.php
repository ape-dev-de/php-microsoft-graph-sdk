<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCustomConfiguration resources
 *
 * Available select fields:
 */
class MacOSCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSCustomConfiguration
     */

    /**
     * Select specific MacOSCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
