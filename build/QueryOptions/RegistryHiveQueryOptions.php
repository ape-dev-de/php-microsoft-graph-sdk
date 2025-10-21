<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistryHive resources
 *
 * Available select fields:
 */
class RegistryHiveQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RegistryHive
     */

    /**
     * Select specific RegistryHive properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
