<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeProtectionPolicy
 */
class ExchangeProtectionPolicy
{
    public function __construct(
        /** The rules associated with the Exchange protection policy. */
        public array $mailboxInclusionRules = [],
        /** The protection units (mailboxes) that are  protected under the Exchange protection policy. */
        public array $mailboxProtectionUnits = [],
        /** @var string[]  */
        public array $mailboxProtectionUnitsBulkAdditionJobs = []
    ) {}
}
