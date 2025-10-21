<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistryValueType resources
 *
 * Available select fields:
 */
class RegistryValueTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RegistryValueType
     */

    /**
     * Select specific RegistryValueType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
