<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DaylightTimeZoneOffset resources
 *
 * Available select fields:
 */
class DaylightTimeZoneOffsetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DaylightTimeZoneOffset
     */

    /**
     * Select specific DaylightTimeZoneOffset properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
