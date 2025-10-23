<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationIdentitySyncPolicyTemplate
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplate
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['templateApplicationLevel'])) {
            $this->templateApplicationLevel = $data['templateApplicationLevel'];
        }
        if (isset($data['userSyncInbound'])) {
            $this->userSyncInbound = $data['userSyncInbound'];
        }
    }
}
