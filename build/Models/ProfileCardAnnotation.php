<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfileCardAnnotation
 */
class ProfileCardAnnotation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If present, the value of this field is used by the profile card as the default property label in the experience (for example, 'Cost Center'). */
    public ?string $displayName = null;

    /** 
     * Each resource in this collection represents the localized value of the attribute name for a given language, used as the default label for that locale. For example, a user with a nb-NO client gets 'Kostnadssenter' as the attribute label, rather than 'Cost Center.'
     * @var DisplayNameLocalization[]
     */
    public array $localizations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['localizations'])) {
            $this->localizations = $data['localizations'];
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
