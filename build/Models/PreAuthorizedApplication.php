<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PreAuthorizedApplication
 */
class PreAuthorizedApplication
{
    public function __construct(
        /** The unique identifier for the application. */
        public ?string $appId = null,
        /** @var string[] The unique identifier for the oauth2PermissionScopes the application requires. */
        public array $delegatedPermissionIds = []
    ) {}
}
