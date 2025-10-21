<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicy
 */
class CrossTenantAccessPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Description for this policy. Required. */
        public ?string $description = null,
        /** Display name for this policy. Required. */
        public ?string $displayName = null,
        /** @var string[] Used to specify which Microsoft clouds an organization would like to collaborate with. By default, this value is empty. Supported values for this field are: microsoftonline.com, microsoftonline.us, and partner.microsoftonline.cn. */
        public array $allowedCloudEndpoints = [],
        /** Defines the default configuration for how your organization interacts with external Microsoft Entra organizations. */
        public ?string $default = null,
        /** Defines partner-specific configurations for external Microsoft Entra organizations. */
        public array $partners = [],
        /** Represents the base policy in the directory for multitenant organization settings. */
        public ?string $templates = null
    ) {}
}
