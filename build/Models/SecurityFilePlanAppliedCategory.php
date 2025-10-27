<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanAppliedCategory
 */
class SecurityFilePlanAppliedCategory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique string that defines the name for the file plan descriptor associated with a particular retention label. */
    public ?string $displayName = null;

    /** 
     * Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
     * @var SecurityFilePlanSubcategory|\stdClass|null
     */
    public SecurityFilePlanSubcategory|\stdClass|null $subcategory = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['subcategory'])) {
            $this->subcategory = is_array($data['subcategory']) ? new SecurityFilePlanSubcategory($data['subcategory']) : $data['subcategory'];
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
