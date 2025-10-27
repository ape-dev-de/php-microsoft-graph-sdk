<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Storage
 */
class Storage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var FileStorage|\stdClass|null
     */
    public mixed $fileStorage = null;

    /** 
     * 
     * @var StorageSettings|\stdClass|null
     */
    public mixed $settings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fileStorage'])) {
            $this->fileStorage = is_array($data['fileStorage']) ? new FileStorage($data['fileStorage']) : $data['fileStorage'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new StorageSettings($data['settings']) : $data['settings'];
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
