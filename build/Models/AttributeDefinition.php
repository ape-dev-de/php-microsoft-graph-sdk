<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinition
 */
class AttributeDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization. */
    public ?bool $anchor = null;

    /** 
     * 
     * @var StringKeyStringValuePair[]
     */
    public array $apiExpressions = [];

    /** true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute. */
    public ?bool $caseExact = null;

    /** The default value of the attribute. */
    public ?string $defaultValue = null;

    /** 'true' to allow null values for attributes. */
    public ?bool $flowNullValues = null;

    /** 
     * Metadata for the given object.
     * @var AttributeDefinitionMetadataEntry[]
     */
    public array $metadata = [];

    /** true if an attribute can have multiple values. Default is false. */
    public ?bool $multivalued = null;

    /**  */
    public ?Mutability $mutability = null;

    /** Name of the attribute. Must be unique within the object definition. Not nullable. */
    public ?string $name = null;

    /** 
     * For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     * @var ReferencedObject[]
     */
    public array $referencedObjects = [];

    /** true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error. */
    public ?bool $required = null;

    /**  */
    public ?AttributeType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['anchor'])) {
            $this->anchor = is_bool($data['anchor']) ? $data['anchor'] : (bool)$data['anchor'];
        }
        if (isset($data['apiExpressions'])) {
            $this->apiExpressions = $data['apiExpressions'];
        }
        if (isset($data['caseExact'])) {
            $this->caseExact = is_bool($data['caseExact']) ? $data['caseExact'] : (bool)$data['caseExact'];
        }
        if (isset($data['defaultValue'])) {
            $this->defaultValue = $data['defaultValue'];
        }
        if (isset($data['flowNullValues'])) {
            $this->flowNullValues = is_bool($data['flowNullValues']) ? $data['flowNullValues'] : (bool)$data['flowNullValues'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['multivalued'])) {
            $this->multivalued = is_bool($data['multivalued']) ? $data['multivalued'] : (bool)$data['multivalued'];
        }
        if (isset($data['mutability'])) {
            $this->mutability = is_string($data['mutability']) ? Mutability::tryFrom($data['mutability']) : $data['mutability'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['referencedObjects'])) {
            $this->referencedObjects = $data['referencedObjects'];
        }
        if (isset($data['required'])) {
            $this->required = is_bool($data['required']) ? $data['required'] : (bool)$data['required'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? AttributeType::tryFrom($data['type']) : $data['type'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
