<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupSetting
 */
class GroupSetting
{
    /**
     * Display name of this group of settings, which comes from the associated template.
     */
    private ?string $displayName;

    /**
     * Unique identifier for the tenant-level groupSettingTemplates object that's been customized for this group-level settings object. Read-only.
     */
    private ?string $templateId;

    /**
     * Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced groupSettingTemplates object.
     */
    private ?string $values;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

}
