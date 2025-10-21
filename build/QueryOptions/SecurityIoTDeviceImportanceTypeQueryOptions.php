<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIoTDeviceImportanceType resources
 *
 * Available select fields:
 */
class SecurityIoTDeviceImportanceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIoTDeviceImportanceType
     */

    /**
     * Select specific SecurityIoTDeviceImportanceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
