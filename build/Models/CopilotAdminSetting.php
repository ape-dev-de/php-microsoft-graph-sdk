<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminSetting
 */
class CopilotAdminSetting
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?CopilotAdminLimitedMode $limitedMode = null
    ) {}
}
