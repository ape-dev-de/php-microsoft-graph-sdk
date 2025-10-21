<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDataSecurityAndGovernance
 */
class UserDataSecurityAndGovernance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $sensitivityLabels = [],
        /** Container for activity logs (content processing and audit) related to this user. ContainsTarget: true. */
        public ?string $activities = null,
        /**  */
        public ?string $protectionScopes = null
    ) {}
}
