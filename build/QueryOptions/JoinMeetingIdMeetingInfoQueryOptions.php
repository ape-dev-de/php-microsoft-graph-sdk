<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for JoinMeetingIdMeetingInfo resources
 *
 * Available select fields:
 * - joinMeetingId
 * - passcode
 */
class JoinMeetingIdMeetingInfoQueryOptions extends QueryOptions
{
    public const FIELD_JOIN_MEETING_ID = 'joinMeetingId';
    public const FIELD_PASSCODE = 'passcode';

    /**
     * Select specific JoinMeetingIdMeetingInfo properties
     * 
     * @param array<string> $select Use JoinMeetingIdMeetingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
