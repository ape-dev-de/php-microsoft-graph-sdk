<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDataSecurityAndGovernance
 */
class UserDataSecurityAndGovernance
{
    public function __construct(
        /** Container for activity logs (content processing and audit) related to this user. ContainsTarget: true. */
        public ?string $activities = null,
        /**  */
        public ?string $protectionScopes = null
    ) {}
}
