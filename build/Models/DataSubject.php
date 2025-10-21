<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSubject
 */
class DataSubject
{
    public function __construct(
        /** Email of the data subject. */
        public ?string $email = null,
        /** First name of the data subject. */
        public ?string $firstName = null,
        /** Last Name of the data subject. */
        public ?string $lastName = null,
        /** The country/region of residency. The residency information is uesed only for internal reporting but not for the content search. */
        public ?string $residency = null
    ) {}
}
