<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMapping
 */
class AttributeMapping
{
    public function __construct(
        /** Default value to be used in case the source property was evaluated to null. Optional. */
        public ?string $defaultValue = null,
        /** For internal use only. */
        public ?bool $exportMissingReferences = null,
        /**  */
        public ?AttributeFlowBehavior $flowBehavior = null,
        /**  */
        public ?AttributeFlowType $flowType = null,
        /** If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes. */
        public ?float $matchingPriority = null,
        /** Defines how a value should be extracted (or transformed) from the source object. */
        public ?AttributeMappingSource $source = null,
        /** Name of the attribute on the target object. */
        public ?string $targetAttributeName = null
    ) {}
}
