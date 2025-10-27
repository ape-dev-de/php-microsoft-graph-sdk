<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Process
 */
class Process
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** User account identifier (user account context the process ran under) for example, AccountName, SID, and so on. */
    public ?string $accountName = null;

    /** The full process invocation commandline including all parameters. */
    public ?string $commandLine = null;

    /** Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Complex type containing file hashes (cryptographic and location-sensitive).
     * @var FileHash|\stdClass|null
     */
    public FileHash|\stdClass|null $fileHash = null;

    /** 
     * The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     * @var ProcessIntegrityLevel|\stdClass|null
     */
    public ProcessIntegrityLevel|\stdClass|null $integrityLevel = null;

    /** True if the process is elevated. */
    public ?bool $isElevated = null;

    /** The name of the process' Image file. */
    public ?string $name = null;

    /** DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $parentProcessCreatedDateTime = null;

    /** The Process ID (PID) of the parent process. */
    public ?float $parentProcessId = null;

    /** The name of the image file of the parent process. */
    public ?string $parentProcessName = null;

    /** Full path, including filename. */
    public ?string $path = null;

    /** The Process ID (PID) of the process. */
    public ?float $processId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['commandLine'])) {
            $this->commandLine = $data['commandLine'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['fileHash'])) {
            $this->fileHash = is_array($data['fileHash']) ? new FileHash($data['fileHash']) : $data['fileHash'];
        }
        if (isset($data['integrityLevel'])) {
            $this->integrityLevel = is_string($data['integrityLevel']) ? ProcessIntegrityLevel::tryFrom($data['integrityLevel']) : $data['integrityLevel'];
        }
        if (isset($data['isElevated'])) {
            $this->isElevated = is_bool($data['isElevated']) ? $data['isElevated'] : (bool)$data['isElevated'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parentProcessCreatedDateTime'])) {
            $this->parentProcessCreatedDateTime = is_string($data['parentProcessCreatedDateTime']) ? new \DateTimeImmutable($data['parentProcessCreatedDateTime']) : $data['parentProcessCreatedDateTime'];
        }
        if (isset($data['parentProcessId'])) {
            $this->parentProcessId = is_numeric($data['parentProcessId']) ? (float)$data['parentProcessId'] : $data['parentProcessId'];
        }
        if (isset($data['parentProcessName'])) {
            $this->parentProcessName = $data['parentProcessName'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['processId'])) {
            $this->processId = is_numeric($data['processId']) ? (float)$data['processId'] : $data['processId'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
