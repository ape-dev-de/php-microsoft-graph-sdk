<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsSrvRecord
 */
class DomainDnsSrvRecord
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isOptional'])) {
            $this->isOptional = is_bool($data['isOptional']) ? $data['isOptional'] : (bool)$data['isOptional'];
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
            $this->ttl = is_numeric($data['ttl']) ? (float)$data['ttl'] : $data['ttl'];
        }
        if (isset($data['nameTarget'])) {
            $this->nameTarget = $data['nameTarget'];
        }
        if (isset($data['port'])) {
            $this->port = is_numeric($data['port']) ? (float)$data['port'] : $data['port'];
        }
        if (isset($data['priority'])) {
            $this->priority = is_numeric($data['priority']) ? (float)$data['priority'] : $data['priority'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = $data['protocol'];
        }
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
        if (isset($data['weight'])) {
            $this->weight = is_numeric($data['weight']) ? (float)$data['weight'] : $data['weight'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
