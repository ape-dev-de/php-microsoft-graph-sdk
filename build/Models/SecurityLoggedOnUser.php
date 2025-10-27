<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLoggedOnUser
 */
class SecurityLoggedOnUser
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
