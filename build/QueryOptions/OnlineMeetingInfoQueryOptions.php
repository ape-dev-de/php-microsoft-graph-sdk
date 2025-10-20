<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingInfo resources
 *
 * Available select fields:
 * - conferenceId
 * - joinUrl
 * - phones
 * - quickDial
 * - tollFreeNumbers
 * - tollNumber
 */
class OnlineMeetingInfoQueryOptions extends QueryOptions
{
    public const FIELD_CONFERENCE_ID = 'conferenceId';
    public const FIELD_JOIN_URL = 'joinUrl';
    public const FIELD_PHONES = 'phones';
    public const FIELD_QUICK_DIAL = 'quickDial';
    public const FIELD_TOLL_FREE_NUMBERS = 'tollFreeNumbers';
    public const FIELD_TOLL_NUMBER = 'tollNumber';

    /**
     * Select specific OnlineMeetingInfo properties
     * 
     * @param array<string> $select Use OnlineMeetingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
