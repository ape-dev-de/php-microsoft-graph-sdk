<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMinimumOperatingSystem
 */
class AndroidMinimumOperatingSystem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v10_0 = null;

    /** When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v11_0 = null;

    /** When TRUE, only Version 4.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_0 = null;

    /** When TRUE, only Version 4.0.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_0_3 = null;

    /** When TRUE, only Version 4.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_1 = null;

    /** When TRUE, only Version 4.2 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_2 = null;

    /** When TRUE, only Version 4.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_3 = null;

    /** When TRUE, only Version 4.4 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v4_4 = null;

    /** When TRUE, only Version 5.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v5_0 = null;

    /** When TRUE, only Version 5.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v5_1 = null;

    /** When TRUE, only Version 6.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v6_0 = null;

    /** When TRUE, only Version 7.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v7_0 = null;

    /** When TRUE, only Version 7.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v7_1 = null;

    /** When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v8_0 = null;

    /** When TRUE, only Version 8.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v8_1 = null;

    /** When TRUE, only Version 9.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v9_0 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['v10_0'])) {
            $this->v10_0 = $data['v10_0'];
        }
        if (isset($data['v11_0'])) {
            $this->v11_0 = $data['v11_0'];
        }
        if (isset($data['v4_0'])) {
            $this->v4_0 = $data['v4_0'];
        }
        if (isset($data['v4_0_3'])) {
            $this->v4_0_3 = $data['v4_0_3'];
        }
        if (isset($data['v4_1'])) {
            $this->v4_1 = $data['v4_1'];
        }
        if (isset($data['v4_2'])) {
            $this->v4_2 = $data['v4_2'];
        }
        if (isset($data['v4_3'])) {
            $this->v4_3 = $data['v4_3'];
        }
        if (isset($data['v4_4'])) {
            $this->v4_4 = $data['v4_4'];
        }
        if (isset($data['v5_0'])) {
            $this->v5_0 = $data['v5_0'];
        }
        if (isset($data['v5_1'])) {
            $this->v5_1 = $data['v5_1'];
        }
        if (isset($data['v6_0'])) {
            $this->v6_0 = $data['v6_0'];
        }
        if (isset($data['v7_0'])) {
            $this->v7_0 = $data['v7_0'];
        }
        if (isset($data['v7_1'])) {
            $this->v7_1 = $data['v7_1'];
        }
        if (isset($data['v8_0'])) {
            $this->v8_0 = $data['v8_0'];
        }
        if (isset($data['v8_1'])) {
            $this->v8_1 = $data['v8_1'];
        }
        if (isset($data['v9_0'])) {
            $this->v9_0 = $data['v9_0'];
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
