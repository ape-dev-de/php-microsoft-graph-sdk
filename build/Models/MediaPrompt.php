<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaPrompt
 */
class MediaPrompt
{
    /**  */
    public ?MediaInfo $mediaInfo = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['mediaInfo'])) {
            $this->mediaInfo = is_array($data['mediaInfo']) ? new MediaInfo($data['mediaInfo']) : $data['mediaInfo'];
        }
    }
}
