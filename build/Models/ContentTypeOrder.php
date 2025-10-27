<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentTypeOrder
 */
class ContentTypeOrder
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether this is the default content type */
    public ?bool $default = null;

    /** Specifies the position in which the content type appears in the selection UI. */
    public ?float $position = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['default'])) {
            $this->default = $data['default'];
        }
        if (isset($data['position'])) {
            $this->position = $data['position'];
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
