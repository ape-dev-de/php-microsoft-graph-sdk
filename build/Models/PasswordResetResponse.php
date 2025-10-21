<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordResetResponse
 */
class PasswordResetResponse
{
    public function __construct(
        /** The Microsoft Entra ID-generated password. */
        public ?string $newPassword = null
    ) {}
}
