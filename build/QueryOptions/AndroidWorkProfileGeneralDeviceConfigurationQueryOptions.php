<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileGeneralDeviceConfiguration resources
 *
 * Available select fields:
 */
class AndroidWorkProfileGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileGeneralDeviceConfiguration
     */

    /**
     * Select specific AndroidWorkProfileGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
