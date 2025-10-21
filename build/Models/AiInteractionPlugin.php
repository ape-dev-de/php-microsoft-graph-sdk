<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionPlugin
 */
class AiInteractionPlugin
{
    public function __construct(
        /** The unique identifier of the plugin. */
        public ?string $identifier = null,
        /** The display name of the plugin. */
        public ?string $name = null,
        /** The version of the plugin used. */
        public ?string $version = null
    ) {}
}
