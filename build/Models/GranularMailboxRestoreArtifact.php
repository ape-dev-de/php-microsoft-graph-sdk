<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GranularMailboxRestoreArtifact
 */
class GranularMailboxRestoreArtifact
{
    public function __construct(
        /** This property will be deprecated soon. Don't use. */
        public ?float $artifactCount = null,
        /** . */
        public ?string $searchResponseId = null
    ) {}
}
