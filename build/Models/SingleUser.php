<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleUser
 */
class SingleUser
{
    /** The name of the user in Microsoft Entra ID. Read-only. */
    public ?string $description = null;

    /** The ID of the user in Microsoft Entra ID. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
