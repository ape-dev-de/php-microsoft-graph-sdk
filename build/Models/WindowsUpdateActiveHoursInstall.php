<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateActiveHoursInstall
 */
class WindowsUpdateActiveHoursInstall
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Active Hours End */
    public ?string $activeHoursEnd = null;

    /** Active Hours Start */
    public ?string $activeHoursStart = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['activeHoursEnd'])) {
            $this->activeHoursEnd = $data['activeHoursEnd'];
        }
        if (isset($data['activeHoursStart'])) {
            $this->activeHoursStart = $data['activeHoursStart'];
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
