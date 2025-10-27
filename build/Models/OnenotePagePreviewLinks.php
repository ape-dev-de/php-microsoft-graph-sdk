<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreviewLinks
 */
class OnenotePagePreviewLinks
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var ExternalLink|\stdClass|null
     */
    public mixed $previewImageUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['previewImageUrl'])) {
            $this->previewImageUrl = is_array($data['previewImageUrl']) ? new ExternalLink($data['previewImageUrl']) : $data['previewImageUrl'];
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
