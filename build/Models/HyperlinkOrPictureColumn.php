<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HyperlinkOrPictureColumn
 */
class HyperlinkOrPictureColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether the display format used for URL columns is an image or a hyperlink. */
    public ?bool $isPicture = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isPicture'])) {
            $this->isPicture = is_bool($data['isPicture']) ? $data['isPicture'] : (bool)$data['isPicture'];
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
