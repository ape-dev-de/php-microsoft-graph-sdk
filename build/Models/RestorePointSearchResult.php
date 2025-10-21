<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResult
 */
class RestorePointSearchResult
{
    public function __construct(
        /** Total number of artifacts restored. */
        public ?float $artifactHitCount = null,
        /**  */
        public ?RestorePoint $restorePoint = null
    ) {}
}
