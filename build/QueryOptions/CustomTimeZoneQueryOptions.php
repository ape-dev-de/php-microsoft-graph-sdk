<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomTimeZone resources
 *
 * Available select fields:
 * - bias
 * - daylightOffset
 * - standardOffset
 */
class CustomTimeZoneQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomTimeZone
     */
    public const FIELD_BIAS = 'bias';
    public const FIELD_DAYLIGHT_OFFSET = 'daylightOffset';
    public const FIELD_STANDARD_OFFSET = 'standardOffset';

    /**
     * Select specific CustomTimeZone properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
