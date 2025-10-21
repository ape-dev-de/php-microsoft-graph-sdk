<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLockerApplicationControlType resources
 *
 * Available select fields:
 */
class AppLockerApplicationControlTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppLockerApplicationControlType
     */

    /**
     * Select specific AppLockerApplicationControlType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
