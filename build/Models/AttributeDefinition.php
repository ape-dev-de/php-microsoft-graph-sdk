<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinition
 */
class AttributeDefinition
{
    public function __construct(
        /** true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization. */
        public ?bool $anchor = null,
        /**  */
        public array $apiExpressions = [],
        /** true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute. */
        public ?bool $caseExact = null,
        /** The default value of the attribute. */
        public ?string $defaultValue = null,
        /** 'true' to allow null values for attributes. */
        public ?bool $flowNullValues = null,
        /** Metadata for the given object. */
        public array $metadata = [],
        /** true if an attribute can have multiple values. Default is false. */
        public ?bool $multivalued = null,
        /**  */
        public ?Mutability $mutability = null,
        /** Name of the attribute. Must be unique within the object definition. Not nullable. */
        public ?string $name = null,
        /** For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object). */
        public array $referencedObjects = [],
        /** true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error. */
        public ?bool $required = null,
        /**  */
        public ?AttributeType $type = null
    ) {}
}
