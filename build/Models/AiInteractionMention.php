<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMention
 */
class AiInteractionMention
{
    public function __construct(
        /**  */
        public ?string $mentioned = null,
        /**  */
        public ?float $mentionId = null,
        /**  */
        public ?string $mentionText = null
    ) {}
}
