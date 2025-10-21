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
        public ?DeviceRegistrationMembership $allowedToJoin = null,
        /**  */
        public ?bool $isAdminConfigurable = null
    ) {}
}
