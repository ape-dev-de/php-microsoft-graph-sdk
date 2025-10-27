<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaSource
 */
class MediaSource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Enumeration value that indicates the media content category.
     * @var MediaSourceContentCategory|\stdClass|null
     */
    public MediaSourceContentCategory|\stdClass|null $contentCategory = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contentCategory'])) {
            $this->contentCategory = is_array($data['contentCategory']) ? new MediaSourceContentCategory($data['contentCategory']) : $data['contentCategory'];
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
