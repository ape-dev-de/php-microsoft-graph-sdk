<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupSetting
 */
class GroupSetting
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of this group of settings, which comes from the associated template. */
    public ?string $displayName = null;

    /** Unique identifier for the tenant-level groupSettingTemplates object that's been customized for this group-level settings object. Read-only. */
    public ?string $templateId = null;

    /** 
     * Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced groupSettingTemplates object.
     * @var SettingValue[]
     */
    public array $values = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
    }
}
