<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Presence
 */
class Presence
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The supplemental information to a user's availability. Possible values are available, away, beRightBack, busy, doNotDisturb, offline, outOfOffice, presenceUnknown. */
        public ?string $activity = null,
        /** The base presence information for a user. Possible values are available, away, beRightBack, busy, doNotDisturb, focusing, inACall, inAMeeting, offline, presenting, presenceUnknown. */
        public ?string $availability = null,
        /** The out of office settings for a user. */
        public ?OutOfOfficeSettings $outOfOfficeSettings = null,
        /** The lexicographically sortable String stamp that represents the version of a presence object. */
        public ?string $sequenceNumber = null,
        /** The presence status message of a user. */
        public ?PresenceStatusMessage $statusMessage = null
    ) {}
}
