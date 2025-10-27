<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Hashes
 */
class Hashes
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The CRC32 value of the file (if available). Read-only. */
    public ?string $crc32Hash = null;

    /** A proprietary hash of the file that can be used to determine if the contents of the file change (if available). Read-only. */
    public ?string $quickXorHash = null;

    /** SHA1 hash for the contents of the file (if available). Read-only. */
    public ?string $sha1Hash = null;

    /** This property isn't supported. Don't use. */
    public ?string $sha256Hash = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['crc32Hash'])) {
            $this->crc32Hash = $data['crc32Hash'];
        }
        if (isset($data['quickXorHash'])) {
            $this->quickXorHash = $data['quickXorHash'];
        }
        if (isset($data['sha1Hash'])) {
            $this->sha1Hash = $data['sha1Hash'];
        }
        if (isset($data['sha256Hash'])) {
            $this->sha256Hash = $data['sha256Hash'];
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
