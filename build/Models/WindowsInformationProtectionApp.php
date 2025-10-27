<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionApp
 */
class WindowsInformationProtectionApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If true, app is denied protection or exemption. */
    public ?bool $denied = null;

    /** The app's description. */
    public ?string $description = null;

    /** App display name. */
    public ?string $displayName = null;

    /** The product name. */
    public ?string $productName = null;

    /** The publisher name */
    public ?string $publisherName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['denied'])) {
            $this->denied = is_bool($data['denied']) ? $data['denied'] : (bool)$data['denied'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['productName'])) {
            $this->productName = $data['productName'];
        }
        if (isset($data['publisherName'])) {
            $this->publisherName = $data['publisherName'];
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
