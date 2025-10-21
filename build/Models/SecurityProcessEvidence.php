<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityProcessEvidence
 */
class SecurityProcessEvidence
{
    public function __construct(
        /** The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue. */
        public ?string $detectionStatus = null,
        /** Image file details. */
        public ?string $imageFile = null,
        /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
        public ?string $mdeDeviceId = null,
        /** Date and time when the parent of the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $parentProcessCreationDateTime = null,
        /** Process ID (PID) of the parent process that spawned the process. */
        public ?float $parentProcessId = null,
        /** Parent process image file details. */
        public ?string $parentProcessImageFile = null,
        /** Command line used to create the new process. */
        public ?string $processCommandLine = null,
        /** Date and time when the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $processCreationDateTime = null,
        /** Process ID (PID) of the newly created process. */
        public ?float $processId = null,
        /** User details of the user that ran the process. */
        public ?string $userAccount = null
    ) {}
}
