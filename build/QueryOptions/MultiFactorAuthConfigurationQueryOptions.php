<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiFactorAuthConfiguration resources
 *
 * Available select fields:
 */
class MultiFactorAuthConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiFactorAuthConfiguration
     */

    /**
     * Select specific MultiFactorAuthConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
