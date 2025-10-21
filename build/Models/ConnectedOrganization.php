<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganization
 */
class ConnectedOrganization
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the connected organization. */
        public ?string $description = null,
        /** The display name of the connected organization. Supports $filter (eq). */
        public ?string $displayName = null,
        /** The identity sources in this connected organization, one of azureActiveDirectoryTenant, crossCloudAzureActiveDirectoryTenant, domainIdentitySource, externalDomainFederation, or socialIdentitySource. Nullable. */
        public array $identitySources = [],
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue. */
        public ?string $state = null,
        /**  */
        public array $externalSponsors = [],
        /**  */
        public array $internalSponsors = []
    ) {}
}
