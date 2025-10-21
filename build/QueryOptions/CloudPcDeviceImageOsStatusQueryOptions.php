<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDeviceImageOsStatus resources
 *
 * Available select fields:
 */
class CloudPcDeviceImageOsStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcDeviceImageOsStatus
     */

    /**
     * Select specific CloudPcDeviceImageOsStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
