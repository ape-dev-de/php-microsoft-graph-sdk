<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreview
 */
class OnenotePagePreview
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var OnenotePagePreviewLinks|\stdClass|null
     */
    public mixed $links = null;

    /**  */
    public ?string $previewText = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new OnenotePagePreviewLinks($data['links']) : $data['links'];
        }
        if (isset($data['previewText'])) {
            $this->previewText = $data['previewText'];
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
