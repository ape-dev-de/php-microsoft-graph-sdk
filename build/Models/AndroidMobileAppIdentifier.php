<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMobileAppIdentifier
 */
class AndroidMobileAppIdentifier
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier for an app, as specified in the play store. */
    public ?string $packageId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['packageId'])) {
            $this->packageId = $data['packageId'];
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
