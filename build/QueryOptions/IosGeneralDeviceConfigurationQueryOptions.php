<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosGeneralDeviceConfiguration resources
 *
 * Available select fields:
 */
class IosGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosGeneralDeviceConfiguration
     */

    /**
     * Select specific IosGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
