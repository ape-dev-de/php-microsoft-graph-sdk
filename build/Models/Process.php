<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Process
 */
class Process
{
    /**
     * User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
     */
    private ?string $accountName;

    /**
     * The full process invocation commandline including all parameters.
     */
    private ?string $commandLine;

    /**
     * Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Complex type containing file hashes (cryptographic and location-sensitive).
     */
    private ?string $fileHash;

    /**
     * The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     */
    private ?string $integrityLevel;

    /**
     * True if the process is elevated.
     */
    private ?bool $isElevated;

    /**
     * The name of the process' Image file.
     */
    private ?string $name;

    /**
     * DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $parentProcessCreatedDateTime;

    /**
     * The Process ID (PID) of the parent process.
     */
    private ?float $parentProcessId;

    /**
     * The name of the image file of the parent process.
     */
    private ?string $parentProcessName;

    /**
     * Full path, including filename.
     */
    private ?string $path;

    /**
     * The Process ID (PID) of the process.
     */
    private ?string $processId;


    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getCommandLine(): ?string
    {
        return $this->commandLine;
    }

    public function setCommandLine(?string $commandLine): self
    {
        $this->commandLine = $commandLine;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getFileHash(): ?string
    {
        return $this->fileHash;
    }

    public function setFileHash(?string $fileHash): self
    {
        $this->fileHash = $fileHash;
        return $this;
    }

    public function getIntegrityLevel(): ?string
    {
        return $this->integrityLevel;
    }

    public function setIntegrityLevel(?string $integrityLevel): self
    {
        $this->integrityLevel = $integrityLevel;
        return $this;
    }

    public function getIsElevated(): ?bool
    {
        return $this->isElevated;
    }

    public function setIsElevated(?bool $isElevated): self
    {
        $this->isElevated = $isElevated;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getParentProcessCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->parentProcessCreatedDateTime;
    }

    public function setParentProcessCreatedDateTime(?\DateTimeInterface $parentProcessCreatedDateTime): self
    {
        $this->parentProcessCreatedDateTime = $parentProcessCreatedDateTime;
        return $this;
    }

    public function getParentProcessId(): ?float
    {
        return $this->parentProcessId;
    }

    public function setParentProcessId(?float $parentProcessId): self
    {
        $this->parentProcessId = $parentProcessId;
        return $this;
    }

    public function getParentProcessName(): ?string
    {
        return $this->parentProcessName;
    }

    public function setParentProcessName(?string $parentProcessName): self
    {
        $this->parentProcessName = $parentProcessName;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getProcessId(): ?string
    {
        return $this->processId;
    }

    public function setProcessId(?string $processId): self
    {
        $this->processId = $processId;
        return $this;
    }

}
