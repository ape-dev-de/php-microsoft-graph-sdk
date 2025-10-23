<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLoggedOnUser
 */
class SecurityLoggedOnUser
{
    /** User account name of the logged-on user. */
    public ?string $accountName = null;

    /** User account domain of the logged-on user. */
    public ?string $domainName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
    }
}
