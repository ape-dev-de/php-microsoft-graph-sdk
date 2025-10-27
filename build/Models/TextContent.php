<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextContent
 */
class TextContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The text content data. Inherits properties from contentBase. */
    public ?string $data = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['data'])) {
            $this->data = $data['data'];
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
