<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLockerFile
 */
class WindowsInformationProtectionAppLockerFile
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The friendly name */
    public ?string $displayName = null;

    /** File as a byte array */
    public ?string $file = null;

    /** SHA256 hash of the file */
    public ?string $fileHash = null;

    /** Version of the entity. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['file'])) {
            $this->file = $data['file'];
        }
        if (isset($data['fileHash'])) {
            $this->fileHash = $data['fileHash'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
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
