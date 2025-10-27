<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSchema
 */
class SynchronizationSchema
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     * @var SynchronizationRule[]
     */
    public array $synchronizationRules = [];

    /** The version of the schema, updated automatically with every schema change. */
    public ?string $version = null;

    /** 
     * Contains the collection of directories and all of their objects.
     * @var DirectoryDefinition[]
     */
    public array $directories = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['synchronizationRules'])) {
            $this->synchronizationRules = $data['synchronizationRules'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['directories'])) {
            $this->directories = $data['directories'];
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
