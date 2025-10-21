<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredentialInfo resources
 *
 * Available select fields:
 */
class DeviceLocalCredentialInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceLocalCredentialInfo
     */

    /**
     * Select specific DeviceLocalCredentialInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
