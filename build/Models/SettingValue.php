<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingValue
 */
class SettingValue
{
    /** Name of the setting (as defined by the groupSettingTemplate). */
    public ?string $name = null;

    /** Value of the setting. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
