<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordingInfo
 */
class RecordingInfo
{
    public function __construct(
        /** The identities of the recording initiator. */
        public ?IdentitySet $initiator = null,
        /**  */
        public ?RecordingStatus $recordingStatus = null
    ) {}
}
