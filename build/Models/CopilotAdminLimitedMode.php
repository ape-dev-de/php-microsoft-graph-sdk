<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminLimitedMode
 */
class CopilotAdminLimitedMode
{
    public function __construct(
        /**  */
        public ?string $groupId = null,
        /**  */
        public ?string $isEnabledForGroup = null
    ) {}
}
