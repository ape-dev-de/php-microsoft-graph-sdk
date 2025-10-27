<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerVariant
 */
class SearchAnswerVariant
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The answer variation description that is shown on the search results page. */
    public ?string $description = null;

    /** The answer variation name that is displayed in search results. */
    public ?string $displayName = null;

    /** The country or region that can view this answer variation. */
    public ?string $languageTag = null;

    /** 
     * The device or operating system that can view this answer variation. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     * @var DevicePlatformType|\stdClass|null
     */
    public DevicePlatformType|\stdClass|null $platform = null;

    /** The URL link for the answer variation. When users select this answer variation from the search results, they're directed to the specified URL. */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['languageTag'])) {
            $this->languageTag = $data['languageTag'];
        }
        if (isset($data['platform'])) {
            $this->platform = is_array($data['platform']) ? new DevicePlatformType($data['platform']) : $data['platform'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
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
