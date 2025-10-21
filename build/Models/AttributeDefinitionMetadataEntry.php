<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinitionMetadataEntry
 */
class AttributeDefinitionMetadataEntry
{
    public function __construct(
        /** Possible values are: BaseAttributeName, ComplexObjectDefinition, IsContainer, IsCustomerDefined, IsDomainQualified, LinkPropertyNames, LinkTypeName, MaximumLength, ReferencedProperty. */
        public ?string $key = null,
        /** Value of the metadata property. */
        public ?string $value = null
    ) {}
}
