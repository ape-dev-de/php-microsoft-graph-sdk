<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContent
 */
class MobileAppContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The collection of contained apps in a MobileLobApp acting as a package.
     * @var MobileContainedApp[]
     */
    public array $containedApps = [];

    /** 
     * The list of files for this app content version.
     * @var MobileAppContentFile[]
     */
    public array $files = [];


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
        if (isset($data['containedApps'])) {
            $this->containedApps = $data['containedApps'];
        }
        if (isset($data['files'])) {
            $this->files = $data['files'];
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
