<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRecipient
 */
class DriveRecipient
{
    /** The alias of the domain object, for cases where an email address is unavailable (for example, security groups). */
    public ?string $alias = null;

    /** The email address for the recipient, if the recipient has an associated email address. */
    public ?string $email = null;

    /** The unique identifier for the recipient in the directory. */
    public ?string $objectId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alias'])) {
            $this->alias = $data['alias'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['objectId'])) {
            $this->objectId = $data['objectId'];
        }
    }
}
