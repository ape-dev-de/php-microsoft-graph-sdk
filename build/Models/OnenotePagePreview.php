<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreview
 */
class OnenotePagePreview
{
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
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new OnenotePagePreviewLinks($data['links']) : $data['links'];
        }
        if (isset($data['previewText'])) {
            $this->previewText = $data['previewText'];
        }
    }
}
