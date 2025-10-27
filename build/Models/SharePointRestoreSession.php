<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointRestoreSession
 */
class SharePointRestoreSession
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The time of completion of the restore session. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The identity of person who created the restore session.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time of creation of the restore session. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Contains error details if the restore session fails or completes with an error.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * Identity of the person who last modified the restore session.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification of the restore session. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Indicates whether the restore session was created normally or by a bulk job.
     * @var RestoreJobType|\stdClass|null
     */
    public mixed $restoreJobType = null;

    /** 
     * The number of metadata artifacts that belong to this restore session.
     * @var RestoreSessionArtifactCount|\stdClass|null
     */
    public mixed $restoreSessionArtifactCount = null;

    /** 
     * Status of the restore session. The value is an aggregated status of the restored artifacts. The possible values are: draft, activating, active, completedWithError, completed, unknownFutureValue, failed. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: failed.
     * @var RestoreSessionStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * A collection of restore points and destination details that can be used to restore SharePoint sites.
     * @var SiteRestoreArtifact[]
     */
    public array $siteRestoreArtifacts = [];

    /** 
     * A collection of SharePoint site URLs and destination details that can be used to restore SharePoint sites.
     * @var SiteRestoreArtifactsBulkAdditionRequest[]
     */
    public array $siteRestoreArtifactsBulkAdditionRequests = [];


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['restoreJobType'])) {
            $this->restoreJobType = is_array($data['restoreJobType']) ? new RestoreJobType($data['restoreJobType']) : $data['restoreJobType'];
        }
        if (isset($data['restoreSessionArtifactCount'])) {
            $this->restoreSessionArtifactCount = is_array($data['restoreSessionArtifactCount']) ? new RestoreSessionArtifactCount($data['restoreSessionArtifactCount']) : $data['restoreSessionArtifactCount'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new RestoreSessionStatus($data['status']) : $data['status'];
        }
        if (isset($data['siteRestoreArtifacts'])) {
            $this->siteRestoreArtifacts = $data['siteRestoreArtifacts'];
        }
        if (isset($data['siteRestoreArtifactsBulkAdditionRequests'])) {
            $this->siteRestoreArtifactsBulkAdditionRequests = $data['siteRestoreArtifactsBulkAdditionRequests'];
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
