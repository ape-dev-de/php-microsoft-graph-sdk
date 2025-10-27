<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivacyProfile
 */
class PrivacyProfile
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A valid smtp email address for the privacy statement contact. Not required. */
    public ?string $contactEmail = null;

    /** A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required. */
    public ?string $statementUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contactEmail'])) {
            $this->contactEmail = $data['contactEmail'];
        }
        if (isset($data['statementUrl'])) {
            $this->statementUrl = $data['statementUrl'];
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
