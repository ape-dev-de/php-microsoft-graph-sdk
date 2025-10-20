<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventSession resources
 *
 * Available select fields:
 * - endDateTime
 * - startDateTime
 * - videoOnDemandWebUrl
 */
class VirtualEventSessionQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_VIDEO_ON_DEMAND_WEB_URL = 'videoOnDemandWebUrl';

    /**
     * Select specific VirtualEventSession properties
     * 
     * @param array<string> $select Use VirtualEventSessionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
