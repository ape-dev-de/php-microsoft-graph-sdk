<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionLink
 */
class AiInteractionLink
{
    public function __construct(
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $linkType = null,
        /**  */
        public ?string $linkUrl = null
    ) {}
}
