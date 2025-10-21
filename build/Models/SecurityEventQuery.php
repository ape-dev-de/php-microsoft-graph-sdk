<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventQuery
 */
class SecurityEventQuery
{
    public function __construct(
        /** Represents unique identification for the  query. ''Asset ID'' for SharePoint Online and OneDrive for Business, ''keywords'' for Exchange Online. */
        public ?string $query = null,
        /** Represents the type of query associated with an event. ''files'' for SPO and ODB and ''messages'' for EXO.The possible values are: files, messages, unknownFutureValue. */
        public ?string $queryType = null
    ) {}
}
