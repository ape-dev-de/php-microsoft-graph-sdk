<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AadUserNotificationRecipient
 */
class AadUserNotificationRecipient
{
    /** Microsoft Entra user identifier. Use the List users method to get this ID. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
