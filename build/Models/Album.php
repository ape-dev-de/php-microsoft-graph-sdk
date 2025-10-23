<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Album
 */
class Album
{
    /** Unique identifier of the driveItem that is the cover of the album. */
    public ?string $coverImageItemId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['coverImageItemId'])) {
            $this->coverImageItemId = $data['coverImageItemId'];
        }
    }
}
