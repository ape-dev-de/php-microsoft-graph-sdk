<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditLogRoot
 */
class AuditLogRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var DirectoryAudit[]
     */
    public array $directoryAudits = [];

    /** 
     * 
     * @var ProvisioningObjectSummary[]
     */
    public array $provisioning = [];

    /** 
     * 
     * @var SignIn[]
     */
    public array $signIns = [];


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
        if (isset($data['directoryAudits'])) {
            $this->directoryAudits = $data['directoryAudits'];
        }
        if (isset($data['provisioning'])) {
            $this->provisioning = $data['provisioning'];
        }
        if (isset($data['signIns'])) {
            $this->signIns = $data['signIns'];
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
