<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Device resources
 *
 * Available select fields:
 */
class DeviceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Device
     */

    /**
     * Select specific Device properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
