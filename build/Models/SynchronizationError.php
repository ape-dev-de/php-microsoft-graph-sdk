<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationError
 */
class SynchronizationError
{
    public function __construct(
        /** The error code. For example, AzureDirectoryB2BManagementPolicyCheckFailure. */
        public ?string $code = null,
        /** The error message. For example, Policy permitting auto-redemption of invitations not configured. */
        public ?string $message = null,
        /** The action to take to resolve the error. For example, false. */
        public ?bool $tenantActionable = null
    ) {}
}
