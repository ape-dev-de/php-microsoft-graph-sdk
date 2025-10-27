<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlSingleSignOnSettings
 */
class SamlSingleSignOnSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The relative URI the service provider would redirect to after completion of the single sign-on flow. */
    public ?string $relayState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['relayState'])) {
            $this->relayState = $data['relayState'];
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
