<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSIncludedApp
 */
class MacOSIncludedApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The bundleId of the app. This maps to the CFBundleIdentifier in the app's bundle configuration. */
    public ?string $bundleId = null;

    /** The version of the app. This maps to the CFBundleShortVersion in the app's bundle configuration. */
    public ?string $bundleVersion = null;


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
        if (isset($data['bundleVersion'])) {
            $this->bundleVersion = $data['bundleVersion'];
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
