<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerCollectionAssignmentTarget
 */
class ConfigurationManagerCollectionAssignmentTarget
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The collection Id that is the target of the assignment. */
    public ?string $collectionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['collectionId'])) {
            $this->collectionId = $data['collectionId'];
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
