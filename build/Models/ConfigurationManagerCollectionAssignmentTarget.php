<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerCollectionAssignmentTarget
 */
class ConfigurationManagerCollectionAssignmentTarget
{
    public function __construct(
        /** Represents an assignment to a Configuration Manager Collection. */
        public ?string $collectionId = null
    ) {}
}
