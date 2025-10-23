<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcWindowsSetting
 */
class CloudPcWindowsSetting
{
    /** The Windows language or region tag to use for language pack configuration and localization of the Cloud PC. The default value is en-US, which corresponds to English (United States). */
    public ?string $locale = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
    }
}
