<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2RestrictionEnforcementType resources
 *
 * Available select fields:
 */
class Fido2RestrictionEnforcementTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2RestrictionEnforcementType
     */

    /**
     * Select specific Fido2RestrictionEnforcementType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
