<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactBase
 */
class RestoreArtifactBase
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
            $this->destinationType = is_array($data['destinationType']) ? new DestinationType($data['destinationType']) : $data['destinationType'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ArtifactRestoreStatus($data['status']) : $data['status'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = is_array($data['restorePoint']) ? new RestorePoint($data['restorePoint']) : $data['restorePoint'];
        }
    }
}
