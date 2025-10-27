<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Synchronization
 */
class Synchronization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents a collection of credentials to access provisioned cloud applications.
     * @var SynchronizationSecretKeyStringValuePair[]
     */
    public array $secrets = [];

    /** 
     * Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     * @var SynchronizationJob[]
     */
    public array $jobs = [];

    /** 
     * Preconfigured synchronization settings for a particular application.
     * @var SynchronizationTemplate[]
     */
    public array $templates = [];


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
        if (isset($data['secrets'])) {
            $this->secrets = $data['secrets'];
        }
        if (isset($data['jobs'])) {
            $this->jobs = $data['jobs'];
        }
        if (isset($data['templates'])) {
            $this->templates = $data['templates'];
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
