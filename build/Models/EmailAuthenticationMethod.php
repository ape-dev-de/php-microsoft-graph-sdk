<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAuthenticationMethod
 */
class EmailAuthenticationMethod
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The email address registered to this user. */
    public ?string $emailAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
    }
}
