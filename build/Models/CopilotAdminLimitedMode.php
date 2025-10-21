<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminLimitedMode
 */
class CopilotAdminLimitedMode
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $groupId = null,
        /**  */
        public ?string $isEnabledForGroup = null
    ) {}
}
