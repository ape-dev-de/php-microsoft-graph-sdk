<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelatedContact
 */
class RelatedContact
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the user has been consented to access student data. */
    public ?bool $accessConsent = null;

    /** Name of the contact. Required. */
    public ?string $displayName = null;

    /** Primary email address of the contact. Required. */
    public ?string $emailAddress = null;

    /** Mobile phone number of the contact. */
    public ?string $mobilePhone = null;

    /**  */
    public ?ContactRelationship $relationship = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessConsent'])) {
            $this->accessConsent = is_bool($data['accessConsent']) ? $data['accessConsent'] : (bool)$data['accessConsent'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['mobilePhone'])) {
            $this->mobilePhone = $data['mobilePhone'];
        }
        if (isset($data['relationship'])) {
            $this->relationship = is_string($data['relationship']) ? ContactRelationship::tryFrom($data['relationship']) : $data['relationship'];
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
