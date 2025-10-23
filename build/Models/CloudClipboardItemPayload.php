<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItemPayload
 */
class CloudClipboardItemPayload
{
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
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['formatName'])) {
            $this->formatName = $data['formatName'];
        }
    }
}
