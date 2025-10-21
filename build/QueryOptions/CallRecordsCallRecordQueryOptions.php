<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsCallRecord resources
 *
 * Available select fields:
 * - endDateTime
 * - joinWebUrl
 * - lastModifiedDateTime
 * - modalities
 * - organizer
 * - participants
 * - startDateTime
 * - type
 * - version
 * - organizer_v2
 * - participants_v2
 * - sessions
 */
class CallRecordsCallRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsCallRecord
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_JOIN_WEB_URL = 'joinWebUrl';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MODALITIES = 'modalities';
    public const FIELD_ORGANIZER = 'organizer';
    public const FIELD_PARTICIPANTS = 'participants';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TYPE = 'type';
    public const FIELD_VERSION = 'version';
    public const FIELD_ORGANIZER_V2 = 'organizer_v2';
    public const FIELD_PARTICIPANTS_V2 = 'participants_v2';
    public const FIELD_SESSIONS = 'sessions';

    /**
     * Select specific CallRecordsCallRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
