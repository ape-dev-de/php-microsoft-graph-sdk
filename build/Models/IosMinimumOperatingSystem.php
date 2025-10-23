<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMinimumOperatingSystem
 */
class IosMinimumOperatingSystem
{
    /** When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v10_0 = null;

    /** When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v11_0 = null;

    /** When TRUE, only Version 12.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v12_0 = null;

    /** When TRUE, only Version 13.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v13_0 = null;

    /** When TRUE, only Version 14.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v14_0 = null;

    /** When TRUE, only Version 15.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v15_0 = null;

    /** When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v8_0 = null;

    /** When TRUE, only Version 9.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
    public ?bool $v9_0 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['v10_0'])) {
            $this->v10_0 = $data['v10_0'];
        }
        if (isset($data['v11_0'])) {
            $this->v11_0 = $data['v11_0'];
        }
        if (isset($data['v12_0'])) {
            $this->v12_0 = $data['v12_0'];
        }
        if (isset($data['v13_0'])) {
            $this->v13_0 = $data['v13_0'];
        }
        if (isset($data['v14_0'])) {
            $this->v14_0 = $data['v14_0'];
        }
        if (isset($data['v15_0'])) {
            $this->v15_0 = $data['v15_0'];
        }
        if (isset($data['v8_0'])) {
            $this->v8_0 = $data['v8_0'];
        }
        if (isset($data['v9_0'])) {
            $this->v9_0 = $data['v9_0'];
        }
    }
}
