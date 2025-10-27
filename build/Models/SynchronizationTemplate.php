<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTemplate
 */
class SynchronizationTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Identifier of the application this template belongs to. */
    public ?string $applicationId = null;

    /** true if this template is recommended to be the default for the application. */
    public ?bool $default = null;

    /** Description of the template. */
    public ?string $description = null;

    /** true if this template should appear in the collection of templates available for the application instance (service principal). */
    public ?bool $discoverable = null;

    /** One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template. */
    public ?string $factoryTag = null;

    /** 
     * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @var SynchronizationMetadataEntry[]
     */
    public array $metadata = [];

    /** 
     * Default synchronization schema for the jobs based on this template.
     * @var SynchronizationSchema|\stdClass|null
     */
    public SynchronizationSchema|\stdClass|null $schema = null;


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
        if (isset($data['applicationId'])) {
            $this->applicationId = $data['applicationId'];
        }
        if (isset($data['default'])) {
            $this->default = $data['default'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['discoverable'])) {
            $this->discoverable = $data['discoverable'];
        }
        if (isset($data['factoryTag'])) {
            $this->factoryTag = $data['factoryTag'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['schema'])) {
            $this->schema = is_array($data['schema']) ? new SynchronizationSchema($data['schema']) : $data['schema'];
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
