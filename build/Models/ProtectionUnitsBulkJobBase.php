<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionUnitsBulkJobBase
 */
class ProtectionUnitsBulkJobBase
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
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
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
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
