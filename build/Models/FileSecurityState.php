<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSecurityState
 */
class FileSecurityState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Complex type containing file hashes (cryptographic and location-sensitive).
     * @var FileHash|\stdClass|null
     */
    public FileHash|\stdClass|null $fileHash = null;

    /** File name (without path). */
    public ?string $name = null;

    /** Full file path of the file/imageFile. */
    public ?string $path = null;

    /** Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage. */
    public ?string $riskScore = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fileHash'])) {
            $this->fileHash = is_array($data['fileHash']) ? new FileHash($data['fileHash']) : $data['fileHash'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['riskScore'])) {
            $this->riskScore = $data['riskScore'];
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
