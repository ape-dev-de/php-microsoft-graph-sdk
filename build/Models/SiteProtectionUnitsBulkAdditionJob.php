<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnitsBulkAdditionJob
 */
class SiteProtectionUnitsBulkAdditionJob
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
     * The list of SharePoint site IDs to add to the SharePoint protection policy.
     * @var string[]
     */
    public array $siteIds = [];

    /** 
     * The list of SharePoint site URLs to add to the SharePoint protection policy.
     * @var string[]
     */
    public array $siteWebUrls = [];


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
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ProtectionUnitsBulkJobStatus($data['status']) : $data['status'];
        }
        if (isset($data['siteIds'])) {
            $this->siteIds = $data['siteIds'];
        }
        if (isset($data['siteWebUrls'])) {
            $this->siteWebUrls = $data['siteWebUrls'];
        }
    }
}
