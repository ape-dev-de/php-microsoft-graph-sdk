<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItemPayload
 */
class CloudClipboardItemPayload
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The formatName version of the value of a cloud clipboard encoded in base64. */
    public ?string $content = null;

    /** For a list of possible values see formatName values. */
    public ?string $formatName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['formatName'])) {
            $this->formatName = $data['formatName'];
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
