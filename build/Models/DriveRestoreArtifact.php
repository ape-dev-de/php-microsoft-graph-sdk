<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRestoreArtifact
 */
class DriveRestoreArtifact
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The time when restoration of restore artifact is completed. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** 
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @var DestinationType|\stdClass|null
     */
    public DestinationType|\stdClass|null $destinationType = null;

    /** 
     * Contains error details if the restore session fails or completes with an error.
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;

    /** The time when restoration of restore artifact is started. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     * @var ArtifactRestoreStatus|\stdClass|null
     */
    public ArtifactRestoreStatus|\stdClass|null $status = null;

    /** 
     * Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     * @var RestorePoint|\stdClass|null
     */
    public RestorePoint|\stdClass|null $restorePoint = null;

    /** The new site identifier if destinationType is new, and the input site ID if the destinationType is inPlace. */
    public ?string $restoredSiteId = null;

    /** The name of the restored site. */
    public ?string $restoredSiteName = null;

    /** The web URL of the restored site. */
    public ?string $restoredSiteWebUrl = null;


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
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
        }
        if (isset($data['destinationType'])) {
            $this->destinationType = is_string($data['destinationType']) ? DestinationType::tryFrom($data['destinationType']) : $data['destinationType'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ArtifactRestoreStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = is_array($data['restorePoint']) ? new RestorePoint($data['restorePoint']) : $data['restorePoint'];
        }
        if (isset($data['restoredSiteId'])) {
            $this->restoredSiteId = $data['restoredSiteId'];
        }
        if (isset($data['restoredSiteName'])) {
            $this->restoredSiteName = $data['restoredSiteName'];
        }
        if (isset($data['restoredSiteWebUrl'])) {
            $this->restoredSiteWebUrl = $data['restoredSiteWebUrl'];
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
