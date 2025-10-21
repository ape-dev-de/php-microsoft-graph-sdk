<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotRoot
 */
class CopilotRoot
{
    public function __construct(
        /**  */
        public ?string $admin = null,
        /**  */
        public ?string $interactionHistory = null,
        /**  */
        public array $users = []
    ) {}
}
