<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GranularMailboxRestoreArtifact
 */
class GranularMailboxRestoreArtifact
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The time when restoration of restore artifact is completed. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** 
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @var DestinationType|\stdClass|null
     */
    public mixed $destinationType = null;

    /** 
     * Contains error details if the restore session fails or completes with an error.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** The time when restoration of restore artifact is started. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     * @var ArtifactRestoreStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     * @var RestorePoint|\stdClass|null
     */
    public mixed $restorePoint = null;

    /** The new restored folder identifier for the user. */
    public ?string $restoredFolderId = null;

    /** The new restored folder name. */
    public ?string $restoredFolderName = null;

    /** The number of items that are being restored in the folder. */
    public ?float $restoredItemCount = null;

    /** This property will be deprecated soon. Don't use. */
    public ?float $artifactCount = null;

    /** . */
    public ?string $searchResponseId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
        }
        if (isset($data['destinationType'])) {
            $this->destinationType = $data['destinationType'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = $data['restorePoint'];
        }
        if (isset($data['restoredFolderId'])) {
            $this->restoredFolderId = $data['restoredFolderId'];
        }
        if (isset($data['restoredFolderName'])) {
            $this->restoredFolderName = $data['restoredFolderName'];
        }
        if (isset($data['restoredItemCount'])) {
            $this->restoredItemCount = $data['restoredItemCount'];
        }
        if (isset($data['artifactCount'])) {
            $this->artifactCount = $data['artifactCount'];
        }
        if (isset($data['searchResponseId'])) {
            $this->searchResponseId = $data['searchResponseId'];
        }
    }
}
