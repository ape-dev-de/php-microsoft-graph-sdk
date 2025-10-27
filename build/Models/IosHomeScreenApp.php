<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenApp
 */
class IosHomeScreenApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the app */
    public ?string $displayName = null;

    /** BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true. */
    public ?string $bundleID = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['bundleID'])) {
            $this->bundleID = $data['bundleID'];
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
