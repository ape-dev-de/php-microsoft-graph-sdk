<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConfigurationValidation
 */
class AuthenticationConfigurationValidation
{
    public function __construct(
        /** Errors in the validation result of a customAuthenticationExtension. */
        public array $errors = [],
        /** Warnings in the validation result of a customAuthenticationExtension. */
        public array $warnings = []
    ) {}
}
