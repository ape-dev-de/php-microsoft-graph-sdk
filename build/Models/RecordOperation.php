<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordOperation
 */
class RecordOperation
{
    public function __construct(
        /** The access token required to retrieve the recording. */
        public ?string $recordingAccessToken = null,
        /** The location where the recording is located. */
        public ?string $recordingLocation = null
    ) {}
}
