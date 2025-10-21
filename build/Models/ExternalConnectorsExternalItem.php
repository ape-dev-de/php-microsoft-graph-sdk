<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItem
 */
class ExternalConnectorsExternalItem
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** An array of access control entries. Each entry specifies the access granted to a user or group. Required. */
        public array $acl = [],
        /** A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional. */
        public ?string $content = null,
        /** A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required. */
        public ?string $anyOf = null
    ) {}
}
