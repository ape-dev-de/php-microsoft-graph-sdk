<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeZoneInformation resources
 *
 * Available select fields:
 * - alias
 * - displayName
 */
class TimeZoneInformationQueryOptions extends QueryOptions
{
    public const FIELD_ALIAS = 'alias';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific TimeZoneInformation properties
     * 
     * @param array<string> $select Use TimeZoneInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
