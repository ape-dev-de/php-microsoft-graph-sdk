<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADJoinPolicy
 */
class AzureADJoinPolicy
{
    public function __construct(
        /**  */
        public ?string $allowedToJoin = null,
        /**  */
        public ?string $isAdminConfigurable = null
    ) {}
}
