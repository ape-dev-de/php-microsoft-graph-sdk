<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemPreviewInfo
 */
class ItemPreviewInfo
{
    /**  */
    public ?string $getUrl = null;

    /**  */
    public ?string $postParameters = null;

    /**  */
    public ?string $postUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['getUrl'])) {
            $this->getUrl = $data['getUrl'];
        }
        if (isset($data['postParameters'])) {
            $this->postParameters = $data['postParameters'];
        }
        if (isset($data['postUrl'])) {
            $this->postUrl = $data['postUrl'];
        }
    }
}
