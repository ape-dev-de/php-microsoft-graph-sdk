<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationRule
 */
class SynchronizationRule
{
    /** Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API. */
    public ?string $id = null;

    /** 
     * 
     * @var ContainerFilter|\stdClass|null
     */
    public mixed $containerFilter = null;

    /** true if the synchronization rule can be customized; false if this rule is read-only and shouldn't be changed. */
    public ?bool $editable = null;

    /** 
     * 
     * @var GroupFilter|\stdClass|null
     */
    public mixed $groupFilter = null;

    /** 
     * Additional extension properties. Unless instructed explicitly by the support team, metadata values shouldn't be changed.
     * @var StringKeyStringValuePair[]
     */
    public array $metadata = [];

    /** Human-readable name of the synchronization rule. Not nullable. */
    public ?string $name = null;

    /** 
     * Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     * @var ObjectMapping[]
     */
    public array $objectMappings = [];

    /** Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first. */
    public ?float $priority = null;

    /** Name of the source directory. Must match one of the directory definitions in synchronizationSchema. */
    public ?string $sourceDirectoryName = null;

    /** Name of the target directory. Must match one of the directory definitions in synchronizationSchema. */
    public ?string $targetDirectoryName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['containerFilter'])) {
            $this->containerFilter = is_array($data['containerFilter']) ? new ContainerFilter($data['containerFilter']) : $data['containerFilter'];
        }
        if (isset($data['editable'])) {
            $this->editable = $data['editable'];
        }
        if (isset($data['groupFilter'])) {
            $this->groupFilter = is_array($data['groupFilter']) ? new GroupFilter($data['groupFilter']) : $data['groupFilter'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['objectMappings'])) {
            $this->objectMappings = $data['objectMappings'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['sourceDirectoryName'])) {
            $this->sourceDirectoryName = $data['sourceDirectoryName'];
        }
        if (isset($data['targetDirectoryName'])) {
            $this->targetDirectoryName = $data['targetDirectoryName'];
        }
    }
}
