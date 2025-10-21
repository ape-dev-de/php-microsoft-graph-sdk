<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionContext
 */
class AiInteractionContext
{
    public function __construct(
        /**  */
        public ?string $contextReference = null,
        /**  */
        public ?string $contextType = null,
        /**  */
        public ?string $displayName = null
    ) {}
}
