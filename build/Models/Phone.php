<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Phone
 */
class Phone
{
    public function __construct(
        /**  */
        public ?string $language = null,
        /** The phone number. */
        public ?string $number = null,
        /**  */
        public ?string $region = null,
        /** The type of phone number. The possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio. */
        public ?PhoneType $type = null
    ) {}
}
