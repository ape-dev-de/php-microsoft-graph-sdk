<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DaylightTimeZoneOffset resources
 *
 * Available select fields:
 * - daylightBias
 */
class DaylightTimeZoneOffsetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DaylightTimeZoneOffset
     */
    public const FIELD_DAYLIGHT_BIAS = 'daylightBias';

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
