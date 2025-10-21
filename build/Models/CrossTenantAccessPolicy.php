<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicy
 */
class CrossTenantAccessPolicy
{
    public function __construct(
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
