<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeZoneBase resources
 *
 * Available select fields:
 * - name
 */
class TimeZoneBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeZoneBase
     */
    public const FIELD_NAME = 'name';

    /**
     * Select specific TimeZoneBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
