<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsItemIdResolver
 */
class ExternalConnectorsItemIdResolver
{
    public function __construct(
        /** The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated. */
        public ?float $priority = null,
        /** Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets. */
        public ?string $itemId = null,
        /** Configurations to match and resolve URL. */
        public ?string $urlMatchInfo = null
    ) {}
}
