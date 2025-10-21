<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDeviceImageStatus resources
 *
 * Available select fields:
 */
class CloudPcDeviceImageStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcDeviceImageStatus
     */

    /**
     * Select specific CloudPcDeviceImageStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
