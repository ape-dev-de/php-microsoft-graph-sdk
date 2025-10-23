<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryNoncustodialDataSource
 */
class SecurityEdiscoveryNoncustodialDataSource
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

    /** 
     * User source or SharePoint site data source as noncustodial data source.
     * @var SecurityDataSource|\stdClass|null
     */
    public mixed $dataSource = null;

    /** 
     * Operation entity that represents the latest indexing for the noncustodial data source.
     * @var SecurityEdiscoveryIndexOperation|\stdClass|null
     */
    public mixed $lastIndexOperation = null;


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
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['holdStatus'])) {
            $this->holdStatus = is_array($data['holdStatus']) ? new SecurityDataSourceHoldStatus($data['holdStatus']) : $data['holdStatus'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['releasedDateTime'])) {
            $this->releasedDateTime = is_string($data['releasedDateTime']) ? new \DateTimeImmutable($data['releasedDateTime']) : $data['releasedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityDataSourceContainerStatus($data['status']) : $data['status'];
        }
        if (isset($data['dataSource'])) {
            $this->dataSource = is_array($data['dataSource']) ? new SecurityDataSource($data['dataSource']) : $data['dataSource'];
        }
        if (isset($data['lastIndexOperation'])) {
            $this->lastIndexOperation = is_array($data['lastIndexOperation']) ? new SecurityEdiscoveryIndexOperation($data['lastIndexOperation']) : $data['lastIndexOperation'];
        }
    }
}
