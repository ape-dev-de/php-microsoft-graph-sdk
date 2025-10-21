<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosDeviceFeaturesConfiguration resources
 *
 * Available select fields:
 */
class IosDeviceFeaturesConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosDeviceFeaturesConfiguration
     */

    /**
     * Select specific IosDeviceFeaturesConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
