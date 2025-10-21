<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleUser
 */
class SingleUser
{
    public function __construct(
        /** The name of the user in Microsoft Entra ID. Read-only. */
        public ?string $description = null,
        /** The ID of the user in Microsoft Entra ID. */
        public ?string $userId = null
    ) {}
}
