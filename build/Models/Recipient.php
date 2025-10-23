<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Recipient
 */
class Recipient
{
    /** 
     * The recipient's email address.
     * @var EmailAddress|\stdClass|null
     */
    public mixed $emailAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
    }
}
