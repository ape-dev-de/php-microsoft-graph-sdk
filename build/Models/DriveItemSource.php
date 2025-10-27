<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSource
 */
class DriveItemSource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Enumeration value that indicates the source application where the file was created.
     * @var DriveItemSourceApplication|\stdClass|null
     */
    public DriveItemSourceApplication|\stdClass|null $application = null;

    /** The external identifier for the drive item from the source. */
    public ?string $externalId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_string($data['application']) ? DriveItemSourceApplication::tryFrom($data['application']) : $data['application'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
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
