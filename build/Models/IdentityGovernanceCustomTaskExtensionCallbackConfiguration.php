<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackConfiguration
 */
class IdentityGovernanceCustomTaskExtensionCallbackConfiguration
{
    public function __construct(
        /** @var string[]  */
        public array $authorizedApps = []
    ) {}
}
