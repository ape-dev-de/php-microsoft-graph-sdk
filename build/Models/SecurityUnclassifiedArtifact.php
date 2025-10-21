<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnclassifiedArtifact
 */
class SecurityUnclassifiedArtifact
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The kind for this unclassifiedArtifact resource, describing what this value means. */
        public ?string $kind = null,
        /** The value for this unclassifiedArtifact. */
        public ?string $value = null
    ) {}
}
