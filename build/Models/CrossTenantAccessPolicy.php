<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicy
 */
class CrossTenantAccessPolicy
{
    /**
     * Used to specify which Microsoft clouds an organization would like to collaborate with. By default, this value is empty. Supported values for this field are: microsoftonline.com, microsoftonline.us, and partner.microsoftonline.cn.
     */
    private ?string $allowedCloudEndpoints;

    /**
     * Defines the default configuration for how your organization interacts with external Microsoft Entra organizations.
     */
    private ?string $default;

    /**
     * Defines partner-specific configurations for external Microsoft Entra organizations.
     */
    private array $partners = [];

    /**
     * Represents the base policy in the directory for multitenant organization settings.
     */
    private ?string $templates;

    public function getAllowedCloudEndpoints(): ?string
    {
        return $this->allowedCloudEndpoints;
    }

    public function setAllowedCloudEndpoints(?string $allowedCloudEndpoints): self
    {
        $this->allowedCloudEndpoints = $allowedCloudEndpoints;
        return $this;
    }

    public function getDefault(): ?string
    {
        return $this->default;
    }

    public function setDefault(?string $default): self
    {
        $this->default = $default;
        return $this;
    }

    public function getPartners(): array
    {
        return $this->partners;
    }

    public function setPartners(array $partners): self
    {
        $this->partners = $partners;
        return $this;
    }

    public function getTemplates(): ?string
    {
        return $this->templates;
    }

    public function setTemplates(?string $templates): self
    {
        $this->templates = $templates;
        return $this;
    }

}
