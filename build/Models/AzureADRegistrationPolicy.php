<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADRegistrationPolicy
 */
class AzureADRegistrationPolicy
{
    public function __construct(
        /**  */
        public ?string $allowedToRegister = null,
        /**  */
        public ?string $isAdminConfigurable = null
    ) {}
}
