<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantDataSecurityAndGovernance
 */
class TenantDataSecurityAndGovernance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SensitivityLabel[]
     */
    public array $sensitivityLabels = [];

    /**  */
    public ?TenantProtectionScopeContainer $protectionScopes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
        }
        if (isset($data['protectionScopes'])) {
            $this->protectionScopes = is_array($data['protectionScopes']) ? new TenantProtectionScopeContainer($data['protectionScopes']) : $data['protectionScopes'];
        }
    }
}
