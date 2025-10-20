<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudCommunications resources
 *
 * Available select fields:
 * - callRecords
 * - calls
 * - onlineMeetings
 * - presences
 */
class CloudCommunicationsQueryOptions extends QueryOptions
{
    public const FIELD_CALL_RECORDS = 'callRecords';
    public const FIELD_CALLS = 'calls';
    public const FIELD_ONLINE_MEETINGS = 'onlineMeetings';
    public const FIELD_PRESENCES = 'presences';

    /**
     * Select specific CloudCommunications properties
     * 
     * @param array<string> $select Use CloudCommunicationsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
