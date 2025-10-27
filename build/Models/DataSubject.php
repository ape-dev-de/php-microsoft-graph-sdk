<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSubject
 */
class DataSubject
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Email of the data subject. */
    public ?string $email = null;

    /** First name of the data subject. */
    public ?string $firstName = null;

    /** Last Name of the data subject. */
    public ?string $lastName = null;

    /** The country/region of residency. The residency information is uesed only for internal reporting but not for the content search. */
    public ?string $residency = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['firstName'])) {
            $this->firstName = $data['firstName'];
        }
        if (isset($data['lastName'])) {
            $this->lastName = $data['lastName'];
        }
        if (isset($data['residency'])) {
            $this->residency = $data['residency'];
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
