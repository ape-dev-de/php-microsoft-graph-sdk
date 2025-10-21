<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataPolicyOperation
 */
class DataPolicyOperation
{
    public function __construct(
        /** Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** Specifies the progress of an operation. */
        public ?string $progress = null,
        /** Possible values are: notStarted, running, complete, failed, unknownFutureValue. */
        public ?string $status = null,
        /** The URL location to where data is being exported for export requests. */
        public ?string $storageLocation = null,
        /** Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $submittedDateTime = null,
        /** The id for the user on whom the operation is performed. */
        public ?string $userId = null
    ) {}
}
