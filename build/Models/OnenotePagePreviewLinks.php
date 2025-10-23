<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreviewLinks
 */
class OnenotePagePreviewLinks
{
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
        if (isset($data['previewImageUrl'])) {
            $this->previewImageUrl = $data['previewImageUrl'];
        }
    }
}
