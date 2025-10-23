<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMinimumOperatingSystem
 */
class WindowsMinimumOperatingSystem
{
    /** Windows version 10.0 or later. */
    public ?bool $v10_0 = null;

    /** Windows version 8.0 or later. */
    public ?bool $v8_0 = null;

    /** Windows version 8.1 or later. */
    public ?bool $v8_1 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['v10_0'])) {
            $this->v10_0 = $data['v10_0'];
        }
        if (isset($data['v8_0'])) {
            $this->v8_0 = $data['v8_0'];
        }
        if (isset($data['v8_1'])) {
            $this->v8_1 = $data['v8_1'];
        }
    }
}
