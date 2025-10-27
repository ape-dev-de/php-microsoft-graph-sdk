<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BinaryContent
 */
class BinaryContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The binary content, encoded as a Base64 string. Inherited from contentBase. */
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
