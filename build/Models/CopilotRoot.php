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
        public ?CopilotAdmin $admin = null,
        /**  */
        public ?AiInteractionHistory $interactionHistory = null,
        /**  */
        public array $users = []
    ) {}
}
