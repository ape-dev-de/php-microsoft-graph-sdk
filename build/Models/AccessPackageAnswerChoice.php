<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerChoice
 */
class AccessPackageAnswerChoice
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The actual value of the selected choice. This is typically a string value which is understandable by applications. Required. */
    public ?string $actualValue = null;

    /** 
     * The text of the answer choice represented in a format for a specific locale.
     * @var AccessPackageLocalizedText[]
     */
    public array $localizations = [];

    /** The string to display for this answer; if an Accept-Language header is provided, and there is a matching localization in localizations, this string will be the matching localized string; otherwise, this string remains as the default non-localized string. Required. */
    public ?string $text = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['actualValue'])) {
            $this->actualValue = $data['actualValue'];
        }
        if (isset($data['localizations'])) {
            $this->localizations = $data['localizations'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
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
