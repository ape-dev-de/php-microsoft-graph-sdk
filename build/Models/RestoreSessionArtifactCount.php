<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionArtifactCount
 */
class RestoreSessionArtifactCount
{
    public function __construct(
        /** The number of artifacts whose restoration completed. */
        public ?float $completed = null,
        /** The number of artifacts whose restoration failed. */
        public ?float $failed = null,
        /** The number of artifacts whose restoration is in progress. */
        public ?float $inProgress = null,
        /** The number of artifacts present in the restore session. */
        public ?string $total = null
    ) {}
}
