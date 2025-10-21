<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomSecurityAttributeDefinition
 */
class CustomSecurityAttributeDefinition
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Name of the attribute set. Case insensitive. */
        public ?string $attributeSet = null,
        /** Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later. */
        public ?string $description = null,
        /** Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true. */
        public ?bool $isCollection = null,
        /** Indicates whether custom security attribute values are indexed for searching on objects that are assigned attribute values. Cannot be changed later. */
        public ?bool $isSearchable = null,
        /** Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive. */
        public ?string $name = null,
        /** Specifies whether the custom security attribute is active or deactivated. Acceptable values are: Available and Deprecated. Can be changed later. */
        public ?string $status = null,
        /** Data type for the custom security attribute values. Supported types are: Boolean, Integer, and String. Cannot be changed later. */
        public ?string $type = null,
        /** Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true. */
        public ?bool $usePreDefinedValuesOnly = null,
        /** @var string[] Values that are predefined for this custom security attribute. This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues. */
        public array $allowedValues = []
    ) {}
}
