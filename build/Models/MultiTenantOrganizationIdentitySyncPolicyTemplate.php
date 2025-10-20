<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationIdentitySyncPolicyTemplate
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplate
{
    /**
     */
    private ?string $templateApplicationLevel;

    /**
     * Defines whether users can be synchronized from the partner tenant.
     */
    private ?string $userSyncInbound;

    public function getTemplateApplicationLevel(): ?string
    {
        return $this->templateApplicationLevel;
    }

    public function setTemplateApplicationLevel(?string $templateApplicationLevel): self
    {
        $this->templateApplicationLevel = $templateApplicationLevel;
        return $this;
    }

    public function getUserSyncInbound(): ?string
    {
        return $this->userSyncInbound;
    }

    public function setUserSyncInbound(?string $userSyncInbound): self
    {
        $this->userSyncInbound = $userSyncInbound;
        return $this;
    }

}
