<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhoneType resources
 *
 * Available select fields:
 */
class PhoneTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PhoneType
     */

    /**
     * Select specific PhoneType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
