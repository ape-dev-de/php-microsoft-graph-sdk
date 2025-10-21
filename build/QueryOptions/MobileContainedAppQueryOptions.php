<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileContainedApp resources
 *
 * Available select fields:
 */
class MobileContainedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileContainedApp
     */

    /**
     * Select specific MobileContainedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
