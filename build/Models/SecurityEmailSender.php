<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEmailSender
 */
class SecurityEmailSender
{
    /** The name of the sender. */
    public ?string $displayName = null;

    /** Sender domain. */
    public ?string $domainName = null;

    /** Sender email address. */
    public ?string $emailAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
    }
}
