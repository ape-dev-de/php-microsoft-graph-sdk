<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsRecord
 */
class DomainDnsRecord
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** If false, the customer must configure this record at the DNS host for Microsoft Online Services to operate correctly with the domain. */
        public ?bool $isOptional = null,
        /** Value used when configuring the name of the DNS record at the DNS host. */
        public ?string $label = null,
        /** Indicates what type of DNS record this entity represents. The value can be CName, Mx, Srv, or Txt. */
        public ?string $recordType = null,
        /** Microsoft Online Service or feature that has a dependency on this DNS record. Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. */
        public ?string $supportedService = null,
        /** Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable. */
        public ?float $ttl = null
    ) {}
}
