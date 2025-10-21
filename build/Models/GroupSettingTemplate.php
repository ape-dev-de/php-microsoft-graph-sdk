<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupSettingTemplate
 */
class GroupSettingTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Description of the template. */
        public ?string $description = null,
        /** Display name of the template. The template named Group.Unified can be used to configure tenant-wide Microsoft 365 group settings, while the template named Group.Unified.Guest can be used to configure group-specific settings. */
        public ?string $displayName = null,
        /** @var string[] Collection of settingTemplateValues that list the set of available settings, defaults and types that make up this template. */
        public array $values = []
    ) {}
}
