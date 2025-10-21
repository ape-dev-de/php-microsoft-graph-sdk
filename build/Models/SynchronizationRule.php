<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationRule
 */
class SynchronizationRule
{
    public function __construct(
        /** Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API. */
        public ?string $id = null,
        /**  */
        public ?string $containerFilter = null,
        /** true if the synchronization rule can be customized; false if this rule is read-only and shouldn't be changed. */
        public ?bool $editable = null,
        /**  */
        public ?string $groupFilter = null,
        /** Additional extension properties. Unless instructed explicitly by the support team, metadata values shouldn''t be changed. */
        public array $metadata = [],
        /** Human-readable name of the synchronization rule. Not nullable. */
        public ?string $name = null,
        /** Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized. */
        public array $objectMappings = [],
        /** Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first. */
        public ?float $priority = null,
        /** Name of the source directory. Must match one of the directory definitions in synchronizationSchema. */
        public ?string $sourceDirectoryName = null,
        /** Name of the target directory. Must match one of the directory definitions in synchronizationSchema. */
        public ?string $targetDirectoryName = null
    ) {}
}
