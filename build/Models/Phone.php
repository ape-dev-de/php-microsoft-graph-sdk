<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Phone
 */
class Phone
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?string $language = null;

    /** The phone number. */
    public ?string $number = null;

    /**  */
    public ?string $region = null;

    /** 
     * The type of phone number. The possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
     * @var PhoneType|\stdClass|null
     */
    public PhoneType|\stdClass|null $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['number'])) {
            $this->number = $data['number'];
        }
        if (isset($data['region'])) {
            $this->region = $data['region'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? PhoneType::tryFrom($data['type']) : $data['type'];
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
