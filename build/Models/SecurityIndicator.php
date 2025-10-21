<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicator
 */
class SecurityIndicator
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?SecurityIndicatorSource $source = null,
        /**  */
        public ?SecurityArtifact $artifact = null
    ) {}
}
