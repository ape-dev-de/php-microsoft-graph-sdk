<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionRequest
 */
class AppLogCollectionRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Time at which the upload log request reached a completed state if not completed yet NULL will be returned. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * List of log folders.
     * @var string[]
     */
    public array $customLogFolders = [];

    /** Indicates error message if any during the upload process. */
    public ?string $errorMessage = null;

    /**  */
    public ?AppLogUploadState $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['customLogFolders'])) {
            $this->customLogFolders = $data['customLogFolders'];
        }
        if (isset($data['errorMessage'])) {
            $this->errorMessage = $data['errorMessage'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? AppLogUploadState::tryFrom($data['status']) : $data['status'];
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
