<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorage
 */
class FileStorage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var FileStorageContainer[]
     */
    public array $containers = [];

    /** 
     * 
     * @var FileStorageContainer[]
     */
    public array $deletedContainers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['containers'])) {
            $this->containers = $data['containers'];
        }
        if (isset($data['deletedContainers'])) {
            $this->deletedContainers = $data['deletedContainers'];
        }
    }
}
