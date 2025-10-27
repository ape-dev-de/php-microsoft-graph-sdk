<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnOtpSendCustomExtensionHandler
 */
class OnOtpSendCustomExtensionHandler
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Configuration regarding properties of the custom extension that are can be overwritten for the onEmailOtpSendListener event listener.
     * @var CustomExtensionOverwriteConfiguration|\stdClass|null
     */
    public CustomExtensionOverwriteConfiguration|\stdClass|null $configuration = null;

    /** 
     * 
     * @var OnOtpSendCustomExtension|\stdClass|null
     */
    public OnOtpSendCustomExtension|\stdClass|null $customExtension = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new CustomExtensionOverwriteConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['customExtension'])) {
            $this->customExtension = is_array($data['customExtension']) ? new OnOtpSendCustomExtension($data['customExtension']) : $data['customExtension'];
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
