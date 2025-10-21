<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileApp resources
 *
 * Available select fields:
 */
class MobileAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileApp
     */

    /**
     * Select specific MobileApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
