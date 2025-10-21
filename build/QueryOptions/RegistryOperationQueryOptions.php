<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistryOperation resources
 *
 * Available select fields:
 */
class RegistryOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RegistryOperation
     */

    /**
     * Select specific RegistryOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
