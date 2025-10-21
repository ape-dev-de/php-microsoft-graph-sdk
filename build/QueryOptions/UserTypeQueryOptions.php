<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserType resources
 *
 * Available select fields:
 */
class UserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserType
     */

    /**
     * Select specific UserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
