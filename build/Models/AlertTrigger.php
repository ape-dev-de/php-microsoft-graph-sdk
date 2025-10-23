<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertTrigger
 */
class AlertTrigger
{
    /** Name of the property serving as a detection trigger. */
    public ?string $name = null;

    /** Type of the property in the key:value pair for interpretation. For example, String, Boolean etc. */
    public ?string $type = null;

    /** Value of the property serving as a detection trigger. */
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
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
