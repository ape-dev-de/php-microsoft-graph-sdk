<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFormattedContent
 */
class SecurityFormattedContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The content of this formattedContent. */
    public ?string $content = null;

    /** 
     * The format of the content. The possible values are: text, html, markdown, unknownFutureValue.
     * @var SecurityContentFormat|\stdClass|null
     */
    public mixed $format = null;


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
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new SecurityContentFormat($data['format']) : $data['format'];
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
