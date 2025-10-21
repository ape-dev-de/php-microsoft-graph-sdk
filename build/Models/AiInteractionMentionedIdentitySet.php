<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMentionedIdentitySet
 */
class AiInteractionMentionedIdentitySet
{
    public function __construct(
        /**  */
        public ?string $conversation = null,
        /**  */
        public ?string $tag = null
    ) {}
}
