<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSGeneralDeviceConfiguration resources
 *
 * Available select fields:
 */
class MacOSGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSGeneralDeviceConfiguration
     */

    /**
     * Select specific MacOSGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
