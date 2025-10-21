<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOrganization
 */
class EducationOrganization
{
    public function __construct(
        /** Organization description. */
        public ?string $description = null,
        /** Organization display name. */
        public ?string $displayName = null,
        /** Source where this organization was created from. Possible values are: sis, manual. */
        public ?string $externalSource = null,
        /** The name of the external source this resource was generated from. */
        public ?string $externalSourceDetail = null
    ) {}
}
