<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAttribute
 */
class IdentityGovernanceTriggerAttribute
{
    /** The name of the trigger attribute that is changed to trigger an attributeChangeTrigger workflow. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
