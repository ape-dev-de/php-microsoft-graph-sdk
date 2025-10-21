<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelatedContact
 */
class RelatedContact
{
    public function __construct(
        /** Indicates whether the user has been consented to access student data. */
        public ?bool $accessConsent = null,
        /** Name of the contact. Required. */
        public ?string $displayName = null,
        /** Primary email address of the contact. Required. */
        public ?string $emailAddress = null,
        /** Mobile phone number of the contact. */
        public ?string $mobilePhone = null,
        /**  */
        public ?string $relationship = null
    ) {}
}
