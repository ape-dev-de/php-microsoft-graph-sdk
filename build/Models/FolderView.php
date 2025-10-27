<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FolderView
 */
class FolderView
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The method by which the folder should be sorted. */
    public ?string $sortBy = null;

    /** If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending. */
    public ?string $sortOrder = null;

    /** The type of view that should be used to represent the folder. */
    public ?string $viewType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['sortBy'])) {
            $this->sortBy = $data['sortBy'];
        }
        if (isset($data['sortOrder'])) {
            $this->sortOrder = $data['sortOrder'];
        }
        if (isset($data['viewType'])) {
            $this->viewType = $data['viewType'];
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
