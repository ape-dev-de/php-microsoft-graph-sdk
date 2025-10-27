<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationPredefinedQuestion
 */
class VirtualEventRegistrationPredefinedQuestion
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of the registration question. */
    public ?string $displayName = null;

    /** Indicates whether an answer to the question is required. The default value is false. */
    public ?bool $isRequired = null;

    /** 
     * Label of the predefined registration question. It accepts a single line of text: street, city, state, postalCode, countryOrRegion, industry, jobTitle, organization, and unknownFutureValue.
     * @var VirtualEventRegistrationPredefinedQuestionLabel|\stdClass|null
     */
    public VirtualEventRegistrationPredefinedQuestionLabel|\stdClass|null $label = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isRequired'])) {
            $this->isRequired = is_bool($data['isRequired']) ? $data['isRequired'] : (bool)$data['isRequired'];
        }
        if (isset($data['label'])) {
            $this->label = is_string($data['label']) ? VirtualEventRegistrationPredefinedQuestionLabel::tryFrom($data['label']) : $data['label'];
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
