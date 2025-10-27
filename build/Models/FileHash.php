<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileHash
 */
class FileHash
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
     * @var FileHashType|\stdClass|null
     */
    public FileHashType|\stdClass|null $hashType = null;

    /** Value of the file hash. */
    public ?string $hashValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['hashType'])) {
            $this->hashType = is_string($data['hashType']) ? FileHashType::tryFrom($data['hashType']) : $data['hashType'];
        }
        if (isset($data['hashValue'])) {
            $this->hashValue = $data['hashValue'];
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
