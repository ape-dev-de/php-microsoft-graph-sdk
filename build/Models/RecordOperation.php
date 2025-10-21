<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecordOperation
 */
class RecordOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Unique Client Context string. Max limit is 256 chars. */
        public ?string $clientContext = null,
        /** The result information. Read-only. */
        public ?string $resultInfo = null,
        /**  */
        public ?string $status = null,
        /** The access token required to retrieve the recording. */
        public ?string $recordingAccessToken = null,
        /** The location where the recording is located. */
        public ?string $recordingLocation = null
    ) {}
}
