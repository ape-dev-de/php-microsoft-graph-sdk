<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobChildApp
 */
class MacOSLobChildApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The build number of the app. */
    public ?string $buildNumber = null;

    /** The bundleId of the app. */
    public ?string $bundleId = null;

    /** The version number of the app. */
    public ?string $versionNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['buildNumber'])) {
            $this->buildNumber = $data['buildNumber'];
        }
        if (isset($data['bundleId'])) {
            $this->bundleId = $data['bundleId'];
        }
        if (isset($data['versionNumber'])) {
            $this->versionNumber = $data['versionNumber'];
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
