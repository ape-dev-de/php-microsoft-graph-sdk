<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContent resources
 *
 * Available select fields:
 */
class MobileAppContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppContent
     */

    /**
     * Select specific MobileAppContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
