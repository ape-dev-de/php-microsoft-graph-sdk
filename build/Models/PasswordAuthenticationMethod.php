<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordAuthenticationMethod
 */
class PasswordAuthenticationMethod
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when this password was last updated. This property is currently not populated. Read-only. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** For security, the password is always returned as null from a LIST or GET operation. */
    public ?string $password = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
    }
}
