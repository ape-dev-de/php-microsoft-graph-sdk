<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestEnumeratedSiteLocation
 */
class SubjectRightsRequestEnumeratedSiteLocation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
     * @var string[]
     */
    public array $urls = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['urls'])) {
            $this->urls = $data['urls'];
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
