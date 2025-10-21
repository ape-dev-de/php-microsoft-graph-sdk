<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppleDeviceFeaturesConfigurationBase resources
 *
 * Available select fields:
 */
class AppleDeviceFeaturesConfigurationBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppleDeviceFeaturesConfigurationBase
     */

    /**
     * Select specific AppleDeviceFeaturesConfigurationBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
