<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointOneDriveOptions
 */
class SharePointOneDriveOptions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of search content. The possible values are: sharedContent, privateContent, unknownFutureValue. Read-only.
     * @var SearchContent|\stdClass|null
     */
    public mixed $includeContent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['includeContent'])) {
            $this->includeContent = is_array($data['includeContent']) ? new SearchContent($data['includeContent']) : $data['includeContent'];
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
