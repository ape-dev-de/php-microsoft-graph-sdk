<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionNetworkLearningSummary
 */
class WindowsInformationProtectionNetworkLearningSummary
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Device Count */
    public ?float $deviceCount = null;

    /** Website url */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deviceCount'])) {
            $this->deviceCount = $data['deviceCount'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
