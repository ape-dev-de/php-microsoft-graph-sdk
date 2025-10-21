<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetDeviceGroup resources
 *
 * Available select fields:
 */
class TargetDeviceGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetDeviceGroup
     */

    /**
     * Select specific TargetDeviceGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
