<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAdditionalDataOptions resources
 *
 * Available select fields:
 */
class SecurityAdditionalDataOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAdditionalDataOptions
     */

    /**
     * Select specific SecurityAdditionalDataOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
