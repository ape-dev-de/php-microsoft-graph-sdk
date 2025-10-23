<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HyperlinkOrPictureColumn
 */
class HyperlinkOrPictureColumn
{
    /** Specifies whether the display format used for URL columns is an image or a hyperlink. */
    public ?bool $isPicture = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isPicture'])) {
            $this->isPicture = $data['isPicture'];
        }
    }
}
