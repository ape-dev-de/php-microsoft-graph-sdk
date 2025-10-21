<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationBehaviors
 */
class AuthenticationBehaviors
{
    public function __construct(
        /**  */
        public ?bool $blockAzureADGraphAccess = null,
        /**  */
        public ?bool $removeUnverifiedEmailClaim = null,
        /**  */
        public ?string $requireClientServicePrincipal = null
    ) {}
}
