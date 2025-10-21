<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for JoinMeetingIdSettings resources
 *
 * Available select fields:
 * - isPasscodeRequired
 * - joinMeetingId
 * - passcode
 */
class JoinMeetingIdSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for JoinMeetingIdSettings
     */
    public const FIELD_IS_PASSCODE_REQUIRED = 'isPasscodeRequired';
    public const FIELD_JOIN_MEETING_ID = 'joinMeetingId';
    public const FIELD_PASSCODE = 'passcode';

    /**
     * Select specific JoinMeetingIdSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
