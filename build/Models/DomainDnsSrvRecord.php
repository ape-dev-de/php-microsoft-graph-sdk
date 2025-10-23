<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsSrvRecord
 */
class DomainDnsSrvRecord
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** If false, the customer must configure this record at the DNS host for Microsoft Online Services to operate correctly with the domain. */
    public ?bool $isOptional = null;

    /** Value used when configuring the name of the DNS record at the DNS host. */
    public ?string $label = null;

    /** Indicates what type of DNS record this entity represents. The value can be CName, Mx, Srv, or Txt. */
    public ?string $recordType = null;

    /** Microsoft Online Service or feature that has a dependency on this DNS record. Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. */
    public ?string $supportedService = null;

    /** Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable. */
    public ?float $ttl = null;

    /** Value to use when configuring the Target property of the SRV record at the DNS host. */
    public ?string $nameTarget = null;

    /** Value to use when configuring the port property of the SRV record at the DNS host. */
    public ?float $port = null;

    /** Value to use when configuring the priority property of the SRV record at the DNS host. */
    public ?float $priority = null;

    /** Value to use when configuring the protocol property of the SRV record at the DNS host. */
    public ?string $protocol = null;

    /** Value to use when configuring the service property of the SRV record at the DNS host. */
    public ?string $service = null;

    /** Value to use when configuring the weight property of the SRV record at the DNS host. */
    public ?float $weight = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isOptional'])) {
            $this->isOptional = $data['isOptional'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['recordType'])) {
            $this->recordType = $data['recordType'];
        }
        if (isset($data['supportedService'])) {
            $this->supportedService = $data['supportedService'];
        }
        if (isset($data['ttl'])) {
            $this->ttl = $data['ttl'];
        }
        if (isset($data['nameTarget'])) {
            $this->nameTarget = $data['nameTarget'];
        }
        if (isset($data['port'])) {
            $this->port = $data['port'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = $data['protocol'];
        }
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
        if (isset($data['weight'])) {
            $this->weight = $data['weight'];
        }
    }
}
