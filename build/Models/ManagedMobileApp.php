<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileApp
 */
class ManagedMobileApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identifier for an app with it's operating system type.
     * @var MobileAppIdentifier|\stdClass|null
     */
    public mixed $mobileAppIdentifier = null;

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
        if (isset($data['mobileAppIdentifier'])) {
            $this->mobileAppIdentifier = is_array($data['mobileAppIdentifier']) ? new MobileAppIdentifier($data['mobileAppIdentifier']) : $data['mobileAppIdentifier'];
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
