<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateConfiguration resources
 *
 * Available select fields:
 */
class IosUpdateConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosUpdateConfiguration
     */

    /**
     * Select specific IosUpdateConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
