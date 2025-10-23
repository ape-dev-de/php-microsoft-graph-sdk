<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganization
 */
class ConnectedOrganization
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the connected organization. */
    public ?string $description = null;

    /** The display name of the connected organization. Supports $filter (eq). */
    public ?string $displayName = null;

    /** 
     * The identity sources in this connected organization, one of azureActiveDirectoryTenant, crossCloudAzureActiveDirectoryTenant, domainIdentitySource, externalDomainFederation, or socialIdentitySource. Nullable.
     * @var IdentitySource[]
     */
    public array $identitySources = [];

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     * @var ConnectedOrganizationState|\stdClass|null
     */
    public mixed $state = null;

    /** 
     * 
     * @var DirectoryObject[]
     */
    public array $externalSponsors = [];

    /** 
     * 
     * @var DirectoryObject[]
     */
    public array $internalSponsors = [];


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
        if (isset($data['identitySources'])) {
            $this->identitySources = $data['identitySources'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['externalSponsors'])) {
            $this->externalSponsors = $data['externalSponsors'];
        }
        if (isset($data['internalSponsors'])) {
            $this->internalSponsors = $data['internalSponsors'];
        }
    }
}
