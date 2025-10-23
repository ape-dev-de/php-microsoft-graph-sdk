<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionIPRangeCollection
 */
class WindowsInformationProtectionIPRangeCollection
{
    /** Display name */
    public ?string $displayName = null;

    /** 
     * Collection of ip ranges
     * @var IpRange[]
     */
    public array $ranges = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['ranges'])) {
            $this->ranges = $data['ranges'];
        }
    }
}
