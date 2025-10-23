<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionUnitsBulkAdditionJob
 */
class DriveProtectionUnitsBulkAdditionJob
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of person who created the job.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time of creation of the job. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the protection units bulk addition job. */
    public ?string $displayName = null;

    /** 
     * Error details containing resource resolution failures, if any.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * The identity of the person who last modified the job.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification made to the job. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /**  */
    public ?ProtectionUnitsBulkJobStatus $status = null;

    /** 
     * The list of OneDrive directoryObjectIds to add to the OneDrive protection policy.
     * @var string[]
     */
    public array $directoryObjectIds = [];

    /** 
     * The list of email addresses to add to the OneDrive protection policy.
     * @var string[]
     */
    public array $drives = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['directoryObjectIds'])) {
            $this->directoryObjectIds = $data['directoryObjectIds'];
        }
        if (isset($data['drives'])) {
            $this->drives = $data['drives'];
        }
    }
}
