<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2CombinationConfiguration resources
 *
 * Available select fields:
 */
class Fido2CombinationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2CombinationConfiguration
     */

    /**
     * Select specific Fido2CombinationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
