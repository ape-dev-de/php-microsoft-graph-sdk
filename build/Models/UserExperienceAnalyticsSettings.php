<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsSettings
 */
class UserExperienceAnalyticsSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** When TRUE, indicates Tenant attach is configured properly and System Center Configuration Manager (SCCM) tenant attached devices will show up in endpoint analytics reporting. When FALSE, indicates Tenant attach is not configured. FALSE by default. */
    public ?bool $configurationManagerDataConnectorConfigured = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['configurationManagerDataConnectorConfigured'])) {
            $this->configurationManagerDataConnectorConfigured = $data['configurationManagerDataConnectorConfigured'];
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
