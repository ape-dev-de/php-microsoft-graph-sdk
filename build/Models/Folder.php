<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Folder
 */
class Folder
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of children contained immediately within this container. */
    public ?float $childCount = null;

    /** 
     * A collection of properties defining the recommended view for the folder.
     * @var FolderView|\stdClass|null
     */
    public FolderView|\stdClass|null $view = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['childCount'])) {
            $this->childCount = is_numeric($data['childCount']) ? (float)$data['childCount'] : $data['childCount'];
        }
        if (isset($data['view'])) {
            $this->view = is_array($data['view']) ? new FolderView($data['view']) : $data['view'];
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
