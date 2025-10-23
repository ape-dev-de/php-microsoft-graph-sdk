<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionStoreApp
 */
class WindowsInformationProtectionStoreApp
{
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
        if (isset($data['denied'])) {
            $this->denied = $data['denied'];
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
}
