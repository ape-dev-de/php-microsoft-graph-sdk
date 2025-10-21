<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSchema
 */
class SynchronizationSchema
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate. */
        public array $synchronizationRules = [],
        /** The version of the schema, updated automatically with every schema change. */
        public ?string $version = null,
        /** Contains the collection of directories and all of their objects. */
        public array $directories = []
    ) {}
}
