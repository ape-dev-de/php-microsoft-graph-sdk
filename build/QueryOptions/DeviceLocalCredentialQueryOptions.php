<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredential resources
 *
 * Available select fields:
 */
class DeviceLocalCredentialQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceLocalCredential
     */

    /**
     * Select specific DeviceLocalCredential properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
