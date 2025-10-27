<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemBody
 */
class ItemBody
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The content of the item. */
    public ?string $content = null;

    /** 
     * The type of the content. Possible values are text and html.
     * @var BodyType|\stdClass|null
     */
    public BodyType|\stdClass|null $contentType = null;


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
        if (isset($data['contentType'])) {
            $this->contentType = is_array($data['contentType']) ? new BodyType($data['contentType']) : $data['contentType'];
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
