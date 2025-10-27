<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationIdentitySyncPolicyTemplate
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?TemplateApplicationLevel $templateApplicationLevel = null;

    /** 
     * Defines whether users can be synchronized from the partner tenant.
     * @var CrossTenantUserSyncInbound|\stdClass|null
     */
    public mixed $userSyncInbound = null;


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
        if (isset($data['templateApplicationLevel'])) {
            $this->templateApplicationLevel = is_array($data['templateApplicationLevel']) ? new TemplateApplicationLevel($data['templateApplicationLevel']) : $data['templateApplicationLevel'];
        }
        if (isset($data['userSyncInbound'])) {
            $this->userSyncInbound = is_array($data['userSyncInbound']) ? new CrossTenantUserSyncInbound($data['userSyncInbound']) : $data['userSyncInbound'];
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
