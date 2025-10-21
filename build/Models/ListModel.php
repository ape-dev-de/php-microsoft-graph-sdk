<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListModel
 */
class ListModel
{
    public function __construct(
        /** The displayable title of the list. */
        public ?string $displayName = null,
        /** Contains more details about the list. */
        public ?string $list = null,
        /** Returns identifiers useful for SharePoint REST compatibility. Read-only. */
        public ?string $sharepointIds = null,
        /** If present, indicates that the list is system-managed. Read-only. */
        public ?string $system = null,
        /** The collection of field definitions for this list. */
        public array $columns = [],
        /** The collection of content types present in this list. */
        public array $contentTypes = [],
        /** Allows access to the list as a drive resource with driveItems. Only present on document libraries. */
        public ?string $drive = null,
        /** All items contained in the list. */
        public array $items = [],
        /** The collection of long-running operations on the list. */
        public array $operations = [],
        /** @var string[] The set of subscriptions on the list. */
        public array $subscriptions = []
    ) {}
}
