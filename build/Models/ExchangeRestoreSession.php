<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeRestoreSession
 */
class ExchangeRestoreSession
{
    public function __construct(
        /**  */
        public array $granularMailboxRestoreArtifacts = [],
        /** A collection of restore points and destination details that can be used to restore Exchange mailboxes. */
        public array $mailboxRestoreArtifacts = [],
        /** @var string[] A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes. */
        public array $mailboxRestoreArtifactsBulkAdditionRequests = []
    ) {}
}
