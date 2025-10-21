<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitBase resources
 *
 * Available select fields:
 */
class ProtectionUnitBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionUnitBase
     */

    /**
     * Select specific ProtectionUnitBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
