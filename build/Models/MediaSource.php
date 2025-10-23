<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaSource
 */
class MediaSource
{
    /** 
     * Enumeration value that indicates the media content category.
     * @var MediaSourceContentCategory|\stdClass|null
     */
    public mixed $contentCategory = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentCategory'])) {
            $this->contentCategory = $data['contentCategory'];
        }
    }
}
