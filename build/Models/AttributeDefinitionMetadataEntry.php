<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinitionMetadataEntry
 */
class AttributeDefinitionMetadataEntry
{
    /** 
     * Possible values are: BaseAttributeName, ComplexObjectDefinition, IsContainer, IsCustomerDefined, IsDomainQualified, LinkPropertyNames, LinkTypeName, MaximumLength, ReferencedProperty.
     * @var AttributeDefinitionMetadata|\stdClass|null
     */
    public mixed $key = null;

    /** Value of the metadata property. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
