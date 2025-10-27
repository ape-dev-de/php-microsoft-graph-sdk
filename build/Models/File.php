<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * File
 */
class File
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Hashes of the file's binary content, if available. Read-only.
     * @var Hashes|\stdClass|null
     */
    public Hashes|\stdClass|null $hashes = null;

    /** The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only. */
    public ?string $mimeType = null;

    /**  */
    public ?bool $processingMetadata = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['hashes'])) {
            $this->hashes = is_array($data['hashes']) ? new Hashes($data['hashes']) : $data['hashes'];
        }
        if (isset($data['mimeType'])) {
            $this->mimeType = $data['mimeType'];
        }
        if (isset($data['processingMetadata'])) {
            $this->processingMetadata = is_bool($data['processingMetadata']) ? $data['processingMetadata'] : (bool)$data['processingMetadata'];
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
