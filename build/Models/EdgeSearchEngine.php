<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngine
 */
class EdgeSearchEngine
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?EdgeSearchEngineType $edgeSearchEngineType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['edgeSearchEngineType'])) {
            $this->edgeSearchEngineType = is_array($data['edgeSearchEngineType']) ? new EdgeSearchEngineType($data['edgeSearchEngineType']) : $data['edgeSearchEngineType'];
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
