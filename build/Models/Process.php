<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Process
 */
class Process
{
    public function __construct(
        /** User account identifier (user account context the process ran under) for example, AccountName, SID, and so on. */
        public ?string $accountName = null,
        /** The full process invocation commandline including all parameters. */
        public ?string $commandLine = null,
        /** Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Complex type containing file hashes (cryptographic and location-sensitive). */
        public ?FileHash $fileHash = null,
        /** The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system. */
        public ?ProcessIntegrityLevel $integrityLevel = null,
        /** True if the process is elevated. */
        public ?bool $isElevated = null,
        /** The name of the process' Image file. */
        public ?string $name = null,
        /** DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $parentProcessCreatedDateTime = null,
        /** The Process ID (PID) of the parent process. */
        public ?float $parentProcessId = null,
        /** The name of the image file of the parent process. */
        public ?string $parentProcessName = null,
        /** Full path, including filename. */
        public ?string $path = null,
        /** The Process ID (PID) of the process. */
        public ?float $processId = null
    ) {}
}
