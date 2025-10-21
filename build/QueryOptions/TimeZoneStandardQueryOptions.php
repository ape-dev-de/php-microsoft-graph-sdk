<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeZoneStandard resources
 *
 * Available select fields:
 */
class TimeZoneStandardQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeZoneStandard
     */

    /**
     * Select specific TimeZoneStandard properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
