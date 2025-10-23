<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPlatforms
 */
class ConditionalAccessPlatforms
{
    /** 
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @var ConditionalAccessDevicePlatform[]
     */
    public array $excludePlatforms = [];

    /** 
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @var ConditionalAccessDevicePlatform[]
     */
    public array $includePlatforms = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['excludePlatforms'])) {
            $this->excludePlatforms = $data['excludePlatforms'];
        }
        if (isset($data['includePlatforms'])) {
            $this->includePlatforms = $data['includePlatforms'];
        }
    }
}
