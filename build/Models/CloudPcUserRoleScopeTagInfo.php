<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserRoleScopeTagInfo
 */
class CloudPcUserRoleScopeTagInfo
{
    public function __construct(
        /** Scope tag display name. */
        public ?string $displayName = null,
        /** Scope tag identity. */
        public ?string $roleScopeTagId = null
    ) {}
}
