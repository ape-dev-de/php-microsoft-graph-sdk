<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedApplicationMetadata
 */
class ProtectedApplicationMetadata
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the integrated application. */
    public ?string $name = null;

    /** The version number of the integrated application. */
    public ?string $version = null;

    /** 
     * The client (application) ID of the Microsoft Entra application. Required.
     * @var PolicyLocation|\stdClass|null
     */
    public mixed $applicationLocation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['applicationLocation'])) {
            $this->applicationLocation = is_array($data['applicationLocation']) ? new PolicyLocation($data['applicationLocation']) : $data['applicationLocation'];
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
