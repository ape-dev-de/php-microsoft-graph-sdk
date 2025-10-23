<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCase
 */
class SecurityEdiscoveryCase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * 
     * @var SecurityCaseStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The user who closed the case.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $closedBy = null;

    /** The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $closedDateTime = null;

    /** The external case number for customer reference. */
    public ?string $externalId = null;

    /** 
     * Returns a list of case ediscoveryCustodian objects for this case.
     * @var SecurityEdiscoveryCustodian[]
     */
    public array $custodians = [];

    /** 
     * Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
     * @var SecurityEdiscoveryNoncustodialDataSource[]
     */
    public array $noncustodialDataSources = [];

    /** 
     * Returns a list of case caseOperation objects for this case.
     * @var SecurityCaseOperation[]
     */
    public array $operations = [];

    /** 
     * Returns a list of eDiscoveryReviewSet objects in the case.
     * @var SecurityEdiscoveryReviewSet[]
     */
    public array $reviewSets = [];

    /** 
     * Returns a list of eDiscoverySearch objects associated with this case.
     * @var SecurityEdiscoverySearch[]
     */
    public array $searches = [];

    /** 
     * Returns a list of eDIscoverySettings objects in the case.
     * @var SecurityEdiscoveryCaseSettings|\stdClass|null
     */
    public mixed $settings = null;

    /** 
     * Returns a list of ediscoveryReviewTag objects associated to this case.
     * @var SecurityEdiscoveryReviewTag[]
     */
    public array $tags = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
        if (isset($data['closedBy'])) {
            $this->closedBy = $data['closedBy'];
        }
        if (isset($data['closedDateTime'])) {
            $this->closedDateTime = $data['closedDateTime'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['custodians'])) {
            $this->custodians = $data['custodians'];
        }
        if (isset($data['noncustodialDataSources'])) {
            $this->noncustodialDataSources = $data['noncustodialDataSources'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['reviewSets'])) {
            $this->reviewSets = $data['reviewSets'];
        }
        if (isset($data['searches'])) {
            $this->searches = $data['searches'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
    }
}
