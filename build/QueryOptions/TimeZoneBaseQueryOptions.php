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
    public const FIELD_NAME = 'name';

    /**
     * Select specific TimeZoneBase properties
     * 
     * @param array<string> $select Use TimeZoneBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
