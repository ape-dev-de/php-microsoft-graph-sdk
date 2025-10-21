<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsSession
 */
class CallRecordsSession
{
    public function __construct(
        /** Endpoint that answered the session. */
        public ?string $callee = null,
        /** Endpoint that initiated the session. */
        public ?string $caller = null,
        /** UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $endDateTime = null,
        /** Failure information associated with the session if the session failed. */
        public ?string $failureInfo = null,
        /** Specifies whether the session is a test. */
        public ?bool $isTest = null,
        /** List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue. */
        public array $modalities = [],
        /** UTC time when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $startDateTime = null,
        /** @var string[] The list of segments involved in the session. Read-only. Nullable. */
        public array $segments = []
    ) {}
}
