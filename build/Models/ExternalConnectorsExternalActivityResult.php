<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivityResult
 */
class ExternalConnectorsExternalActivityResult
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when the particular activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $type = null,
        /** Represents an identity used to identify who is responsible for the activity. */
        public ?string $performedBy = null,
        /** Error information that explains the failure to process an external activity. */
        public ?string $error = null
    ) {}
}
