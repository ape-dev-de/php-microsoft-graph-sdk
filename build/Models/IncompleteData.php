<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncompleteData
 */
class IncompleteData
{
    public function __construct(
        /** The service does not have source data before the specified time. */
        public ?\DateTimeInterface $missingDataBeforeDateTime = null,
        /** Some data was not recorded due to excessive activity. */
        public ?bool $wasThrottled = null
    ) {}
}
