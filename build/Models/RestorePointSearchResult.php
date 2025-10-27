<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResult
 */
class RestorePointSearchResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Total number of artifacts restored. */
    public ?float $artifactHitCount = null;

    /** 
     * 
     * @var RestorePoint|\stdClass|null
     */
    public mixed $restorePoint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['artifactHitCount'])) {
            $this->artifactHitCount = $data['artifactHitCount'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = is_array($data['restorePoint']) ? new RestorePoint($data['restorePoint']) : $data['restorePoint'];
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
