<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppIdentifier
 */
class IosMobileAppIdentifier
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier for an app, as specified in the app store. */
    public ?string $bundleId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bundleId'])) {
            $this->bundleId = $data['bundleId'];
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
