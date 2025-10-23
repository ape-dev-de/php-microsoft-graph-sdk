<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngine
 */
class EdgeSearchEngine
{
    /**  */
    public ?EdgeSearchEngineType $edgeSearchEngineType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['edgeSearchEngineType'])) {
            $this->edgeSearchEngineType = $data['edgeSearchEngineType'];
        }
    }
}
