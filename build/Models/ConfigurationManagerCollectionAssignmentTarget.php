<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerCollectionAssignmentTarget
 */
class ConfigurationManagerCollectionAssignmentTarget
{
    public function __construct(
        /** The collection Id that is the target of the assignment. */
        public ?string $collectionId = null
    ) {}
}
