<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordingEventMessageDetail resources
 *
 * Available select fields:
 * - callId
 * - callRecordingDisplayName
 * - callRecordingDuration
 * - callRecordingStatus
 * - callRecordingUrl
 * - initiator
 * - meetingOrganizer
 */
class CallRecordingEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordingEventMessageDetail
     */
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CALL_RECORDING_DISPLAY_NAME = 'callRecordingDisplayName';
    public const FIELD_CALL_RECORDING_DURATION = 'callRecordingDuration';
    public const FIELD_CALL_RECORDING_STATUS = 'callRecordingStatus';
    public const FIELD_CALL_RECORDING_URL = 'callRecordingUrl';
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEETING_ORGANIZER = 'meetingOrganizer';

    /**
     * Select specific CallRecordingEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
