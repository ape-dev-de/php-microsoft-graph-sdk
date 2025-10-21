<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicationFacet
 */
class PublicationFacet
{
    public function __construct(
        /** The user who checked out the file. */
        public ?string $checkedOutBy = null,
        /** The state of publication for this document. Either published or checkout. Read-only. */
        public ?string $level = null,
        /** The unique identifier for the version that is visible to the current caller. Read-only. */
        public ?string $versionId = null
    ) {}
}
