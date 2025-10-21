<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargettedUserType resources
 *
 * Available select fields:
 */
class TargettedUserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargettedUserType
     */

    /**
     * Select specific TargettedUserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
