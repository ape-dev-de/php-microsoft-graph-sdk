<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Image
 */
class Image
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Optional. Height of the image, in pixels. Read-only. */
    public ?float $height = null;

    /** Optional. Width of the image, in pixels. Read-only. */
    public ?float $width = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['height'])) {
            $this->height = is_numeric($data['height']) ? (float)$data['height'] : $data['height'];
        }
        if (isset($data['width'])) {
            $this->width = is_numeric($data['width']) ? (float)$data['width'] : $data['width'];
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
