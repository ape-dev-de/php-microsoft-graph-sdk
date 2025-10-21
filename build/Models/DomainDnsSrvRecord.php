<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsSrvRecord
 */
class DomainDnsSrvRecord
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
        public ?string $ttl = null,
        /** Value to use when configuring the Target property of the SRV record at the DNS host. */
        public ?string $nameTarget = null,
        /** Value to use when configuring the port property of the SRV record at the DNS host. */
        public ?float $port = null,
        /** Value to use when configuring the priority property of the SRV record at the DNS host. */
        public ?float $priority = null,
        /** Value to use when configuring the protocol property of the SRV record at the DNS host. */
        public ?string $protocol = null,
        /** Value to use when configuring the service property of the SRV record at the DNS host. */
        public ?string $service = null,
        /** Value to use when configuring the weight property of the SRV record at the DNS host. */
        public ?string $weight = null
    ) {}
}
