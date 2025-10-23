<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngineCustom
 */
class EdgeSearchEngineCustom
{
    /** Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine. */
    public ?string $edgeSearchEngineOpenSearchXmlUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['edgeSearchEngineOpenSearchXmlUrl'])) {
            $this->edgeSearchEngineOpenSearchXmlUrl = $data['edgeSearchEngineOpenSearchXmlUrl'];
        }
    }
}
