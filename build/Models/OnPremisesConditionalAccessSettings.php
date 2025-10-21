<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesConditionalAccessSettings
 */
class OnPremisesConditionalAccessSettings
{
    public function __construct(
        /** Indicates if on premises conditional access is enabled for this organization */
        public ?bool $enabled = null,
        /** @var string[] User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy. */
        public array $excludedGroups = [],
        /** @var string[] User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access. */
        public array $includedGroups = [],
        /** Singleton entity which represents the Exchange OnPremises Conditional Access Settings for a tenant. */
        public ?string $overrideDefaultRule = null
    ) {}
}
