<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCustomConfiguration resources
 *
 * Available select fields:
 */
class IosCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosCustomConfiguration
     */

    /**
     * Select specific IosCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
