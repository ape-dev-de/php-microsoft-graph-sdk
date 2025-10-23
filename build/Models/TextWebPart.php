<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextWebPart
 */
class TextWebPart
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The HTML string in text web part. */
    public ?string $innerHtml = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['innerHtml'])) {
            $this->innerHtml = $data['innerHtml'];
        }
    }
}
