<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngineCustom
 */
class EdgeSearchEngineCustom
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine. */
    public ?string $edgeSearchEngineOpenSearchXmlUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['edgeSearchEngineOpenSearchXmlUrl'])) {
            $this->edgeSearchEngineOpenSearchXmlUrl = $data['edgeSearchEngineOpenSearchXmlUrl'];
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
