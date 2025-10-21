<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupSetting
 */
class GroupSetting
{
    public function __construct(
        /** Display name of this group of settings, which comes from the associated template. */
        public ?string $displayName = null,
        /** Unique identifier for the tenant-level groupSettingTemplates object that's been customized for this group-level settings object. Read-only. */
        public ?string $templateId = null,
        /** @var string[] Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced groupSettingTemplates object. */
        public array $values = []
    ) {}
}
