<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeRestoreSession
 */
class ExchangeRestoreSession
{
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
     * 
     * @var GranularMailboxRestoreArtifact[]
     */
    public array $granularMailboxRestoreArtifacts = [];

    /** 
     * A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     * @var MailboxRestoreArtifact[]
     */
    public array $mailboxRestoreArtifacts = [];

    /** 
     * A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes.
     * @var MailboxRestoreArtifactsBulkAdditionRequest[]
     */
    public array $mailboxRestoreArtifactsBulkAdditionRequests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['restoreJobType'])) {
            $this->restoreJobType = $data['restoreJobType'];
        }
        if (isset($data['restoreSessionArtifactCount'])) {
            $this->restoreSessionArtifactCount = $data['restoreSessionArtifactCount'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['granularMailboxRestoreArtifacts'])) {
            $this->granularMailboxRestoreArtifacts = $data['granularMailboxRestoreArtifacts'];
        }
        if (isset($data['mailboxRestoreArtifacts'])) {
            $this->mailboxRestoreArtifacts = $data['mailboxRestoreArtifacts'];
        }
        if (isset($data['mailboxRestoreArtifactsBulkAdditionRequests'])) {
            $this->mailboxRestoreArtifactsBulkAdditionRequests = $data['mailboxRestoreArtifactsBulkAdditionRequests'];
        }
    }
}
