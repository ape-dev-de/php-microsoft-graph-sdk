<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserActivityTypes resources
 *
 * Available select fields:
 */
class UserActivityTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserActivityTypes
     */

    /**
     * Select specific UserActivityTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
