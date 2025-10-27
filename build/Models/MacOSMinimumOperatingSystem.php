<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSMinimumOperatingSystem
 */
class MacOSMinimumOperatingSystem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_10 = null;

    /** When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_11 = null;

    /** When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_12 = null;

    /** When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_13 = null;

    /** When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_14 = null;

    /** When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_15 = null;

    /** When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_7 = null;

    /** When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_8 = null;

    /** When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v10_9 = null;

    /** When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v11_0 = null;

    /** When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v12_0 = null;

    /** When TRUE, indicates macOS 13.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE. */
    public ?bool $v13_0 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['v10_10'])) {
            $this->v10_10 = is_bool($data['v10_10']) ? $data['v10_10'] : (bool)$data['v10_10'];
        }
        if (isset($data['v10_11'])) {
            $this->v10_11 = is_bool($data['v10_11']) ? $data['v10_11'] : (bool)$data['v10_11'];
        }
        if (isset($data['v10_12'])) {
            $this->v10_12 = is_bool($data['v10_12']) ? $data['v10_12'] : (bool)$data['v10_12'];
        }
        if (isset($data['v10_13'])) {
            $this->v10_13 = is_bool($data['v10_13']) ? $data['v10_13'] : (bool)$data['v10_13'];
        }
        if (isset($data['v10_14'])) {
            $this->v10_14 = is_bool($data['v10_14']) ? $data['v10_14'] : (bool)$data['v10_14'];
        }
        if (isset($data['v10_15'])) {
            $this->v10_15 = is_bool($data['v10_15']) ? $data['v10_15'] : (bool)$data['v10_15'];
        }
        if (isset($data['v10_7'])) {
            $this->v10_7 = is_bool($data['v10_7']) ? $data['v10_7'] : (bool)$data['v10_7'];
        }
        if (isset($data['v10_8'])) {
            $this->v10_8 = is_bool($data['v10_8']) ? $data['v10_8'] : (bool)$data['v10_8'];
        }
        if (isset($data['v10_9'])) {
            $this->v10_9 = is_bool($data['v10_9']) ? $data['v10_9'] : (bool)$data['v10_9'];
        }
        if (isset($data['v11_0'])) {
            $this->v11_0 = is_bool($data['v11_0']) ? $data['v11_0'] : (bool)$data['v11_0'];
        }
        if (isset($data['v12_0'])) {
            $this->v12_0 = is_bool($data['v12_0']) ? $data['v12_0'] : (bool)$data['v12_0'];
        }
        if (isset($data['v13_0'])) {
            $this->v13_0 = is_bool($data['v13_0']) ? $data['v13_0'] : (bool)$data['v13_0'];
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
