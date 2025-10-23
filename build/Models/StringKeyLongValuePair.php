<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyLongValuePair
 */
class StringKeyLongValuePair
{
    /** The mapping of the user type from the source system to the target system. For example:User to User - For Microsoft Entra ID to Microsoft Entra ID synchronization worker to user - For Workday to Microsoft Entra synchronization. */
    public ?string $key = null;

    /** Total number of synchronized objects. */
    public ?float $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
