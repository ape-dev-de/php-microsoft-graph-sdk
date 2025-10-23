<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Phone
 */
class Phone
{
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
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->type = is_array($data['type']) ? new PhoneType($data['type']) : $data['type'];
        }
    }
}
