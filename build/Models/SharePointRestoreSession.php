<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointRestoreSession
 */
class SharePointRestoreSession
{
    public function __construct(
        /** A collection of restore points and destination details that can be used to restore SharePoint sites. */
        public array $siteRestoreArtifacts = [],
        /** @var string[] A collection of SharePoint site URLs and destination details that can be used to restore SharePoint sites. */
        public array $siteRestoreArtifactsBulkAdditionRequests = []
    ) {}
}
