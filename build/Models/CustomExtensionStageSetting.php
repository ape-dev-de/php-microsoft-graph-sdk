<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionStageSetting
 */
class CustomExtensionStageSetting
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $stage = null,
        /** Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand. */
        public ?string $customExtension = null
    ) {}
}
