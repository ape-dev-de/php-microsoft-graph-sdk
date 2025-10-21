<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppConfiguration resources
 *
 * Available select fields:
 */
class TargetedManagedAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppConfiguration
     */

    /**
     * Select specific TargetedManagedAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
