<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUserType resources
 *
 * Available select fields:
 */
class WindowsUserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUserType
     */

    /**
     * Select specific WindowsUserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
