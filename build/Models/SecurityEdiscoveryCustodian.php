<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCustodian
 */
class SecurityEdiscoveryCustodian
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Created date and time of the dataSourceContainer entity. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Display name of the dataSourceContainer entity. */
    public ?string $displayName = null;

    /** 
     * The hold status of the dataSourceContainer. The possible values are: notApplied, applied, applying, removing, partial
     * @var SecurityDataSourceHoldStatus|\stdClass|null
     */
    public mixed $holdStatus = null;

    /** Last modified date and time of the dataSourceContainer. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Date and time that the dataSourceContainer was released from the case. */
    public ?\DateTimeInterface $releasedDateTime = null;

    /** 
     * Latest status of the dataSourceContainer. Possible values are: Active, Released.
     * @var SecurityDataSourceContainerStatus|\stdClass|null
     */
    public mixed $status = null;

    /** Date and time the custodian acknowledged a hold notification. */
    public ?\DateTimeInterface $acknowledgedDateTime = null;

    /** Email address of the custodian. */
    public ?string $email = null;

    /** 
     * Operation entity that represents the latest indexing for the custodian.
     * @var SecurityEdiscoveryIndexOperation|\stdClass|null
     */
    public mixed $lastIndexOperation = null;

    /** 
     * Data source entity for SharePoint sites associated with the custodian.
     * @var SecuritySiteSource[]
     */
    public array $siteSources = [];

    /** 
     * Data source entity for groups associated with the custodian.
     * @var SecurityUnifiedGroupSource[]
     */
    public array $unifiedGroupSources = [];

    /** 
     * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     * @var SecurityUserSource[]
     */
    public array $userSources = [];


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['holdStatus'])) {
            $this->holdStatus = $data['holdStatus'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['releasedDateTime'])) {
            $this->releasedDateTime = $data['releasedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['acknowledgedDateTime'])) {
            $this->acknowledgedDateTime = $data['acknowledgedDateTime'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['lastIndexOperation'])) {
            $this->lastIndexOperation = $data['lastIndexOperation'];
        }
        if (isset($data['siteSources'])) {
            $this->siteSources = $data['siteSources'];
        }
        if (isset($data['unifiedGroupSources'])) {
            $this->unifiedGroupSources = $data['unifiedGroupSources'];
        }
        if (isset($data['userSources'])) {
            $this->userSources = $data['userSources'];
        }
    }
}
