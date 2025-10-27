<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMapping
 */
class AttributeMapping
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Default value to be used in case the source property was evaluated to null. Optional. */
    public ?string $defaultValue = null;

    /** For internal use only. */
    public ?bool $exportMissingReferences = null;

    /**  */
    public ?AttributeFlowBehavior $flowBehavior = null;

    /**  */
    public ?AttributeFlowType $flowType = null;

    /** If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes. */
    public ?float $matchingPriority = null;

    /** 
     * Defines how a value should be extracted (or transformed) from the source object.
     * @var AttributeMappingSource|\stdClass|null
     */
    public AttributeMappingSource|\stdClass|null $source = null;

    /** Name of the attribute on the target object. */
    public ?string $targetAttributeName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['defaultValue'])) {
            $this->defaultValue = $data['defaultValue'];
        }
        if (isset($data['exportMissingReferences'])) {
            $this->exportMissingReferences = is_bool($data['exportMissingReferences']) ? $data['exportMissingReferences'] : (bool)$data['exportMissingReferences'];
        }
        if (isset($data['flowBehavior'])) {
            $this->flowBehavior = is_string($data['flowBehavior']) ? AttributeFlowBehavior::tryFrom($data['flowBehavior']) : $data['flowBehavior'];
        }
        if (isset($data['flowType'])) {
            $this->flowType = is_string($data['flowType']) ? AttributeFlowType::tryFrom($data['flowType']) : $data['flowType'];
        }
        if (isset($data['matchingPriority'])) {
            $this->matchingPriority = is_numeric($data['matchingPriority']) ? (float)$data['matchingPriority'] : $data['matchingPriority'];
        }
        if (isset($data['source'])) {
            $this->source = is_array($data['source']) ? new AttributeMappingSource($data['source']) : $data['source'];
        }
        if (isset($data['targetAttributeName'])) {
            $this->targetAttributeName = $data['targetAttributeName'];
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
