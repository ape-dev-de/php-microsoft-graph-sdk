<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitStatus resources
 *
 * Available select fields:
 */
class ProtectionUnitStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionUnitStatus
     */

    /**
     * Select specific ProtectionUnitStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
