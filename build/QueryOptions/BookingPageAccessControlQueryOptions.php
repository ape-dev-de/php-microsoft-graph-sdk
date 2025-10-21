<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingPageAccessControl resources
 *
 * Available select fields:
 */
class BookingPageAccessControlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingPageAccessControl
     */

    /**
     * Select specific BookingPageAccessControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
