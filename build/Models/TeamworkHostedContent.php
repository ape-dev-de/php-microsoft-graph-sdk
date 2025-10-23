<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkHostedContent
 */
class TeamworkHostedContent
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Write only. Bytes for the hosted content (such as images). */
    public ?string $contentBytes = null;

    /** Write only. Content type. such as image/png, image/jpg. */
    public ?string $contentType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contentBytes'])) {
            $this->contentBytes = $data['contentBytes'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
    }
}
