<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidGeneralDeviceConfiguration resources
 *
 * Available select fields:
 */
class AndroidGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidGeneralDeviceConfiguration
     */

    /**
     * Select specific AndroidGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
