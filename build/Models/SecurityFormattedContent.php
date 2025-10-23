<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFormattedContent
 */
class SecurityFormattedContent
{
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
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
    }
}
