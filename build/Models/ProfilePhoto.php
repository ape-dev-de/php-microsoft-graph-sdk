<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfilePhoto
 */
class ProfilePhoto
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The height of the photo. Read-only. */
    public ?float $height = null;

    /** The width of the photo. Read-only. */
    public ?float $width = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['height'])) {
            $this->height = $data['height'];
        }
        if (isset($data['width'])) {
            $this->width = $data['width'];
        }
    }
}
