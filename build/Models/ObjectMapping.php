<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMapping
 */
class ObjectMapping
{
    public function __construct(
        /** Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values. */
        public array $attributeMappings = [],
        /** When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped. */
        public ?bool $enabled = null,
        /**  */
        public ?string $flowTypes = null,
        /** Additional extension properties. Unless mentioned explicitly, metadata values should not be changed. */
        public array $metadata = [],
        /** Human-friendly name of the object mapping. */
        public ?string $name = null,
        /** Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US. */
        public ?string $scope = null,
        /** Name of the object in the source directory. Must match the object name from the source directory definition. */
        public ?string $sourceObjectName = null,
        /** Name of the object in target directory. Must match the object name from the target directory definition. */
        public ?string $targetObjectName = null
    ) {}
}
