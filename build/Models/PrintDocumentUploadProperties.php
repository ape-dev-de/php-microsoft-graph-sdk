<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocumentUploadProperties
 */
class PrintDocumentUploadProperties
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The document's content (MIME) type. */
    public ?string $contentType = null;

    /** The document's name. */
    public ?string $documentName = null;

    /** The document's size in bytes. */
    public ?float $size = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['documentName'])) {
            $this->documentName = $data['documentName'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
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
