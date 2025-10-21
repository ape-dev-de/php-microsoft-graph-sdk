<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDeviceImage resources
 *
 * Available select fields:
 */
class CloudPcDeviceImageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcDeviceImage
     */

    /**
     * Select specific CloudPcDeviceImage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
